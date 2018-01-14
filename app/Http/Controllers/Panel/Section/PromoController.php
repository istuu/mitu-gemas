<?php

namespace App\Http\Controllers\Panel\Section;

use App\Http\Controllers\Panel\BaseController;
use Illuminate\Http\Request;
use Wa;

class PromoController extends BaseController
{
    public function actionGetIndex()
    {
        $title = Wa::model('promo_title')->first();
        $steps = Wa::model('promo_step')->orderBy('sequence')->where('is_active',1)->get();
    	$this->layout->{'rightSection'} = view('panel.promo',[
            'title' => $title,
            'steps' => $steps,
            'max'   => Wa::model('promo_step')->max('sequence'),
        ]);
    }

    public function actionPostIndex(Request $request){
        switch ($request->type) {
            case 'title':
                return $this->actionUpdateTitle($request);

            case 'step-add':
                return $this->actionCreateStep($request);

            default:
                return $this->actionUpdateStep($request);

        }
    }

    public function actionAjaxPostEdit(Request $request){
        $model = Wa::model('promo_step')->findOrFail($request->id);
        return view('panel.promo.step-edit',[
            'model' => $model,
        ]);
    }

    public function actionUpdateTitle($request){
        try{
            $model = Wa::model('promo_title')->first();
            $model->title = $request->title;
            $model->video_link = $request->video_link;
            $model->save();

            $this->setTransactionMessage('Detail has been updated', 'success');
            return redirect('admin-cp/section/promo');

        }catch(\Exception $e){
            $this->setTransactionMessage($e->getMessage(), 'error');
            return redirect('admin-cp/section/promo');
        }
    }

    public function actionCreateStep($request){
        try{
            $model = Wa::model('promo_step');
            $model->image = $this->handleUpload($request,'image');
            $model->description = $request->description;
            $model->sequence = $request->sequence;
            $model->is_active = $request->is_active;
            $model->create_on = date('Y-m-d H:i:s');
            $model->save();

            $this->orderModel(Wa::model('promo_step'));

            $this->setTransactionMessage('Data has been added', 'success');
            return redirect('admin-cp/section/promo');

        }catch(\Exception $e){
            $this->setTransactionMessage($e->getMessage(), 'error');
            return redirect('admin-cp/section/promo');
        }
    }

    public function actionUpdateStep($request){
        try{
            $model = Wa::model('promo_step')->find($request->id);
            $model->image = isset($request->image) ? $this->handleUpload($request,'image'):$model->image;
            $model->description = $request->description;
            $model->sequence = $request->sequence;
            $model->is_active = $request->is_active;
            $model->create_on = date('Y-m-d H:i:s');
            $model->save();

            $this->orderModel(Wa::model('promo_step'));

            $this->setTransactionMessage('Data has been updated', 'success');
            return redirect('admin-cp/section/promo');

        }catch(\Exception $e){
            $this->setTransactionMessage($e->getMessage(), 'error');
            return redirect('admin-cp/section/promo');
        }
    }

    public function actionAjaxGetDelete(Request $request)
    {
        $model = Wa::model('promo_step')->findOrFail($request->id)->delete();
        return "ok";
    }

    public function orderModel($models){
        $models = $models->orderBy('sequence')->get();
        $i=1;
        foreach($models as $model){
            $model->sequence = $i;
            $model->save();
            $i++;
        }
    }
}
