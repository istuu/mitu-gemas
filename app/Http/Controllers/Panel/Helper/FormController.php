<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 12/15/2016
 * Time: 10:40 AM
 */

namespace App\Http\Controllers\Panel\Helper;


use Illuminate\Support\Str;
use Request;
use Session;
use Validator;
use Wa;
use App\Http\Controllers\Panel\BaseController;

class FormController extends BaseController
{
    /**
     * @var object Webarq\Manager\Cms\HTML\FormManager
     */
    protected $builder;

    /**
     * @var string
     */
    protected $layout = 'form';

    /**
     * Pre-defined post data
     *
     * @var array
     */
    protected $data = [];

    /**
     * @var
     */
    protected $model;

    /**
     * Form callback when succeed
     *
     * @var
     */
    protected $callback;

    /**
     * Inserted ids
     *
     * @var array
     */
    protected $ids = [];

    public function before()
    {
        if (null === ($parent = parent::before()) && isset($this->admin)) {
            $this->makeBuilder();
        }

        return $parent;
    }

    protected function makeBuilder()
    {
        $options = $this->panel->getAction($this->action . '.form', []);
// Take out callback option
        $this->callback = array_pull($options, 'callback');

        $options['action'] = \URL::panel(
                \URL::detect(
                        array_pull($options, 'permalink'), $this->module->getName(),
                        $this->panel->getName(), 'form/' . $this->action
                )
        );

        if ('edit' === $this->action) {
            $options['action'] .= '/' . $this->getParam(1);
        }

        $options += [
                'module' => $this->module->getName(),
                'panel' => $this->panel->getName(),
                'type' => $this->action
        ];

        $this->builder = Wa::manager('cms.HTML!.form', \Auth::user(), $options, $this->action);
    }

    /**
     * User must choose either create or update
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function actionGetIndex()
    {
        return $this->actionGetForbidden();
    }

    /**
     * Fresh create
     */
    public function actionGetCreate()
    {
        $this->builder->compile();
    }

    /**
     * Handling submitted create form
     */
    public function actionPostCreate()
    {
// Add post data in to form builder
        $this->builder->setvalues(Request::all());

// Compile the builder
        $this->builder->compile();

// Initiate validator
        $validator = $this->validator();

        if (!$validator->fails()) {
            $data = Wa::manager('cms.query.post', 'create', $this->data, $this->builder->getPairs());

            $manager = Wa::manager('cms.query.insert', $this->admin, $data->getPost(), $this->builder->getMaster());

            if ($this->ids = $manager->execute($this->builder->getInput())) {
// Update sequence
                Wa::manager('cms.query.sequence', $this->builder->getInput(),
                        $data->getPost(), array_get($this->ids, $this->builder->getMaster()))->execute();
// Set messages
                $this->setTransactionMessage(Wa::trans('webarq::core.messages.success-insert'), 'success');

// File upload handling
                $this->uploadFiles($data->getFiles());

                if (null !== ($redirect = Request::input('redirect-url'))) {
                    return redirect($redirect, 301, [
                            'refresh' => 5
                    ]);
                }

// Redirect to listing controller
                return redirect($this->panel->getPermalink('listing/index'));
            }
        } else {
            $this->builder->setAlert($validator->errors()->getMessages(), 'warning');
        }
    }

    /**
     * Handling js validation create
     */
    public function actionAjaxPostCreate(){
// Add post data in to form builder
        $this->builder->setvalues(Request::all());

// Compile the builder
        $this->builder->compile();

// Initiate validator
        $validator = $this->validator();

        if (!$validator->fails()) {
            return 'success';
        }else{
            return view('panel.validation',[
                'alerts' => $validator->errors()->getMessages(),
            ]);
        }
    }

    /**
     * Create validator instance
     *
     * @return object Validator
     */
    protected function validator()
    {
        return Validator::make(
                \Request::all(), $this->builder->getValidatorRules(), $this->builder->getValidatorMessages()
        );
    }

    /**
     * File uploader
     *
     * @param array $files
     */
    protected function uploadFiles(array $files)
    {
        $remote = Request::input('remote-value', []);
        if (!is_array($remote)) {
            $remote = unserialize(base64_decode($remote));
        }

        if ([] !== $files) {
            foreach ($files as $key => $file) {
// Upload file
                $file->upload();
// Unlink old file
                if (!is_numeric($key) && isset($remote[$key]) && is_file($remote[$key])) {
                    unlink($remote[$key]);
                }
            }
        }

    }

    /**
     * Fresh edit
     */
    public function actionGetEdit()
    {
// Set master ID
        $this->builder->setEditingRowId($this->getParam(1));
// Initiate builder data model
        $this->builder->dataModeling($this->getParam(1));
// Get values from builder model
        $val = $this->builder->getValue();
// Item not found
        if (!is_array($val) || [] === $val || [] === $this->builder->getInput()) {
            return $this->actionGetForbidden();
        }
        $this->builder->compile();
    }

    /**
     * Handling submitted edit form
     */
    public function actionPostEdit()
    {
// Set master ID
        $this->builder->setEditingRowId($this->getParam(1));

// Add post data in to form builder
        $this->builder->setvalues(Request::all());

// Compile the builder
        $this->builder->compile();

// Initiate validator
        $validator = $this->validator();

        if (!$validator->fails()) {
            $data = Wa::manager('cms.query.post', 'edit', $this->data, $this->builder->getPairs());

            $manager = Wa::manager('cms.query.update', $this->admin, $data->getPost(), $this->builder->getMaster())
                    ->setId($this->getParam(1));

            $this->ids = $manager->execute();

            // if ($this->ids) {
// Sequence column update
                $remote = Request::input('remote-value', []);
                if (!is_array($remote)) {
                    $remote = Str::decodeSerialize($remote);
                }
                Wa::manager('cms.query.sequence',
                        $this->builder->getInput(), $data->getPost(), $this->getParam(1), $remote)->execute();

// File upload handling
                $this->uploadFiles($data->getFiles());
// Set messages
                $this->setTransactionMessage(Wa::trans('webarq::core.messages.success-update'), 'success');

                if (null !== ($redirect = \Session::pull('redirect-url'))) {
                    return redirect($redirect, 301, [
                            'refresh' => 5
                    ]);
                }

                return redirect(Request::url());
            // } else {
            //     $this->builder->setAlert([Wa::trans('webarq::core.messages.invalid-update')], 'warning');
            // }
        } else {
            $this->builder->setAlert($validator->errors()->getMessages(), 'warning');
        }
    }

    /**
     * Handling js validation edit
     */
    public function actionAjaxPostEdit(){
// Set master ID
        $this->builder->setEditingRowId($this->getParam(1));

// Add post data in to form builder
        $this->builder->setvalues(Request::all());

// Compile the builder
        $this->builder->compile();

// Initiate validator
        $validator = $this->validator();

        if (!$validator->fails()) {
            return 'success';
        }else{
            return view('panel.validation',[
                'alerts' => $validator->errors()->getMessages(),
            ]);
        }
    }

    /**
     * @return mixed
     */
    public function after()
    {
// While on form hide search box
        view()->share('shareSearchBox', false);

// Check for form callback
        if (null !== ($c = $this->callback)) {
            if (is_callable($c)) {
                $c();
            }
        }

        $this->layout->{'rightSection'} = $this->builder->toHtml();

        $this->layout->with([
                'strModule' => $this->module->getName(),
                'strPanel' => $this->panel->getName(),
                'strAction' => $this->action
        ]);

        return parent::after();
    }

    public function actionAjaxGetSequence()
    {
        if ('create' === Request::input('varAction')
                && null !== ($secret = Request::input('varSecret'))
        ) {
            try {
                $secret = unserialize(decrypt($secret));
                if (isset($secret['table']) && isset($secret['column'])) {
                    $parent = array_get($secret, 'parent');
                    $get = \DB::table($secret['table']);

                    if (isset($parent) && $serial = json_decode($parent, true)) {
                        foreach ($serial as $input => $column) {
                            $value = Request::input($input);
                            if (null === $value) {
                                $get->whereNull($column);
                            } else {
                                $get->where($column, $value);
                            }
                        }
                    }

                    return $get->count($secret['column']) + 1;

                }
            } catch (\Exception $e) {
                return 'false';
            }
        }

        return 'false';
    }

    public function isAccessible()
    {
        if ('sequence' === $this->action) {
            return true;
        } else {
            return parent::isAccessible();
        }
    }
}
