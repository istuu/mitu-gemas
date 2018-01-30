<?php

namespace App\Http\Controllers\Panel\Voucher;

use Illuminate\Http\Request;
use App\Http\Controllers\Panel\BaseController;
use App\Webarq\Model\VoucherModel as Model;
use File;
use Excel;
use Wa;
use DB;
class VoucherEmasController extends BaseController
{
    public function before(){
        $this->model = new Model;
        $this->path  = 'site/exports/Voucher Emas.xls';
    }

    public function actionAjaxGetExport()
    {
        $model = Wa::model('voucher')->get();

        try{
            foreach ($model as $key => $value) {
                $data[$key]['No']       = $key+1;
                $data[$key]['Type']     = $value->type;
                $data[$key]['Unique Code'] = $value->unique_code;
                $data[$key]['Prize']    = $value->prize;
                $data[$key]['Status']   = $value->status;

            }
            $filename = 'Voucher Emas';

            return $this->handleExport($filename, $data, $this->path);

        }catch(\Exception $e){
            return 'failed';
        }
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
        try{
            DB::beginTransaction();
            Excel::load($file, function($reader) {
                foreach($reader->get() as $data){
                    if($data->code !== null){
                        $cek = Wa::model('voucher')->where('unique_code',$data->code)->count();
                        if($cek > 0){
                            $model = Model::where('unique_code',$data->code)->first();
                            $model->type        = 'emas';
                            $model->unique_code = $data->code;
                            $model->prize       = $data->prize;
                            $model->status      = $data->status;
                            $model->last_update = date('Y-m-d H:i:s');
                            $model->save();
                        }else{
                            $model = new Model;
                            $model->type        = 'emas';
                            $model->unique_code = $data->code;
                            $model->prize       = $data->prize;
                            $model->status      = $data->status;
                            $model->create_on   = date('Y-m-d H:i:s');
                            $model->save();
                        }
                    }
                }
            });
            DB::commit();
            return array("success" => true, "uuid" => $uuid);
        }catch(\Exception $e){
            DB::rollback();
            return array("success" => false, "uuid" => $uuid, "message" => $e->getMessage());
        }

    }
}
