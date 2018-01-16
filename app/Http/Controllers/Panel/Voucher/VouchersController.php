<?php

namespace App\Http\Controllers\Panel\Voucher;

use Illuminate\Http\Request;
use App\Http\Controllers\Panel\BaseController;
use App\Webarq\Model\VoucherModel as Model;
use File;
use Excel;
use Wa;
class VouchersController extends BaseController
{
    public function before(){
        $this->model = new Model;
    }

    public function actionGetExport()
    {

    }

    public function actionGetImport()
    {
        $html = view('panel.import');
        $this->layout->{'rightSection'} = $html;
    }

    public function actionAjaxPostImport(Request $request){
        $file = $request->file('qqfile');
        $uuid = $request->all()['qquuid'];
        return $this->handleImport($file, $uuid);
    }

    public function handleImport($file, $uuid){
        Excel::load($file, function($reader) {
            foreach($reader->get() as $data){
                $cek = Wa::model('voucher')->where('unique_code',$data->unique_code)->count();
                if($cek > 0){
                    $model = Model::where('unique_code',$data->unique_code)->first();
                    $model->unique_code = $data->unique_code;
                    $model->status      = $data->status;
                    $model->last_update = date('Y-m-d H:i:s');
                    $model->save();
                }else{
                    $model = new Model;
                    $model->unique_code = $data->unique_code;
                    $model->status      = $data->status;
                    $model->create_on   = date('Y-m-d H:i:s');
                    $model->save();
                }
            }
        });
        return array("success" => true, "uuid" => $uuid);
    }
}
