<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/15/2017
 * Time: 5:10 PM
 */

namespace App\Http\Controllers\Panel;


use Auth;
use DB;
use URL;
use Wa;
use Webarq\Http\Controllers\Webarq;
use Webarq\Info\ModuleInfo;
use Webarq\Info\PanelInfo;
use Excel;
use Validator;
use Response;

class BaseController extends \Webarq\Http\Controllers\Panel\BaseController
{
    public function escape()
    {
        $action = $this->getParam('action');
        if ($action === 'detail' || $action === 'placement'){
            view()->share(['shareModule' => $this->module, 'sharePanel' => $this->panel]);
        }else{
            if (null === $this->admin) {
                if ('login' !== $this->action && 'auth' !== $this->controller) {
                    return redirect(URL::panel('system/admins/auth/login'));
                }
            } elseif ([] === $this->admin->getLevel() && !$this->admin->isDaemon()) {
                return $this->actionGetNoMethod();
            } elseif (null !== \Request::segment(2)
                    && (!$this->isAccessible() || !is_object($this->module) || !is_object($this->panel))
            ) {
                return $this->actionGetForbidden();
            } elseif (null !== ($escape = $this->escapeRules())) {
                return $escape;
            }

            view()->share(['shareModule' => $this->module, 'sharePanel' => $this->panel]);
            return parent::escape();
        }
    }

    public function handleUpload($request,$file){
        $input = $request->all();
        $rules = array(
            $file => 'image|max:3000',
        );

        $validation = Validator::make($input, $rules);

        if ($validation->fails()) {
            return Response::make($validation->errors->first(), 400);
        }

        $destinationPath = 'site/uploads/images';
        $extension       = $request->file($file)->getClientOriginalExtension();
        $originalName    = $request->file($file)->getClientOriginalName();
        $fileName        = $originalName."-".str_random(5).'.' . $extension;
        $upload          = $request->file($file)->move($destinationPath, $fileName);
        return $destinationPath.'/'.$fileName;
    }

    public function handleExport($filename, $data, $path){
        @unlink(public_path($path));

        \Excel::create($filename, function($excel)  use($data) {

            $excel->sheet('Sheet 1', function($sheet) use($data)  {

                $sheet->fromArray($data);

            });
        })->store('xls',public_path('site/exports'));

        return asset($path);
    }

}
