<?php

namespace App\Http\Controllers\Panel\Voucher;

use Illuminate\Http\Request;
use App\Http\Controllers\Panel\BaseController;
use App\Webarq\Model\VoucherModel as Model;
use File;
use Excel;
use Wa;
use DB;
class VouchersController extends BaseController
{
    public function before(){
        $this->model = new Model;
        $this->path  = 'site/exports/Vouchers Data.xls';
    }

    public function actionAjaxGetExport()
    {
        $model = Wa::model('voucher')->select('vouchers.*','prize_tables.type','prize_tables.prize')
                    ->join('prize_tables','prize_tables.id','=','vouchers.id')
                    ->get();

        try{
            foreach ($model as $key => $value) {
                $data[$key]['No']       = $key+1;
                $data[$key]['Type']     = $value->type;
                $data[$key]['Unique Code'] = $value->unique_code;
                $data[$key]['Prize']    = $value->prize;
                $data[$key]['Status']   = $value->status;

            }
            $filename = 'Vouchers Data';

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
                    $cek = Wa::model('prize_table')->where('prize',$data->prize)->count();
                    if($cek > 0){
                        $prize_id = Wa::model('prize_table')->where('prize',$data->prize)->first()->id;
                    }else{
                        $prize_id = DB::table('prize_tables')->insertGetId([
                                        'type' => $data->type,
                                        'prize' => $data->prize,
                                        'create_on'=> date('Y-m-d H:i:s')
                                    ]);
                    }

                    $cek = Wa::model('voucher')->where('unique_code',$data->unique_code)->count();
                    if($cek > 0){
                        $model = Model::where('unique_code',$data->unique_code)->first();
                        $model->prize_id    = $prize_id;
                        $model->unique_code = $data->unique_code;
                        $model->status      = $data->status;
                        $model->last_update = date('Y-m-d H:i:s');
                        $model->save();
                    }else{
                        $model = new Model;
                        $model->prize_id    = $prize_id;
                        $model->unique_code = $data->unique_code;
                        $model->status      = $data->status;
                        $model->create_on   = date('Y-m-d H:i:s');
                        $model->save();
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
