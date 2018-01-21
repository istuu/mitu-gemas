<?php

namespace App\Http\Controllers\Panel\Section;

use App\Http\Controllers\Panel\BaseController;
use Illuminate\Http\Request;
use Wa;

class PrizeController extends BaseController
{
    public function actionGetIndex()
    {
        $title = Wa::model('prize_title')->first();
        $steps = Wa::model('prize_item')->orderBy('sequence')->where('is_active',1)->get();
    	$this->layout->{'rightSection'} = view('panel.prize',[
            'title' => $title,
            'steps' => $steps,
            'max'   => Wa::model('prize_item')->max('sequence'),
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
        $model = Wa::model('prize_item')->findOrFail($request->id);
        return view('panel.prize.item-edit',[
            'model' => $model,
        ]);
    }

    public function actionUpdateTitle($request){
        try{
            $model = Wa::model('prize_title')->first();
            $model->title = $request->title;
            $model->description = $request->description;
            $model->save();

            $this->setTransactionMessage('Detail has been updated', 'success');
            return redirect('admin-panel/section/prize');

        }catch(\Exception $e){
            $this->setTransactionMessage($e->getMessage(), 'error');
            return redirect('admin-panel/section/prize');
        }
    }

    public function actionCreateStep($request){
        try{
            $model = Wa::model('prize_item');
            $model->image = $this->handleUpload($request,'image');
            $model->description = $request->description;
            $model->sequence = $request->sequence;
            $model->is_active = $request->is_active;
            $model->create_on = date('Y-m-d H:i:s');
            $model->save();

            $this->orderModel(Wa::model('prize_item'));

            $this->setTransactionMessage('Data has been added', 'success');
            return redirect('admin-panel/section/prize');

        }catch(\Exception $e){
            $this->setTransactionMessage($e->getMessage(), 'error');
            return redirect('admin-panel/section/prize');
        }
    }

    public function actionUpdateStep($request){
        try{
            $model = Wa::model('prize_item')->find($request->id);
            $model->image = isset($request->image) ? $this->handleUpload($request,'image'):$model->image;
            $model->description = $request->description;
            $model->sequence = $request->sequence;
            $model->is_active = $request->is_active;
            $model->create_on = date('Y-m-d H:i:s');
            $model->save();

            $this->orderModel(Wa::model('prize_item'));

            $this->setTransactionMessage('Data has been updated', 'success');
            return redirect('admin-panel/section/prize');

        }catch(\Exception $e){
            $this->setTransactionMessage($e->getMessage(), 'error');
            return redirect('admin-panel/section/prize');
        }
    }

    public function actionAjaxGetDelete(Request $request)
    {
        $model = Wa::model('prize_item')->findOrFail($request->id)->delete();
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
