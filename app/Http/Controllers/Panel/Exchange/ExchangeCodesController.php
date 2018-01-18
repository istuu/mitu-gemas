<?php

namespace App\Http\Controllers\Panel\Exchange;

use Illuminate\Http\Request;
use App\Http\Controllers\Panel\BaseController;
use App\Webarq\Model\VoucherModel as Model;
use File;
use Excel;
use Wa;
use DB;
class ExchangeCodesController extends BaseController
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

     public function actionGetDetail(){
         $model = Wa::model('exchange_code')->find(request()->segment(5));
         $html = view('panel.exchange-detail',[
             'model'     => $model,
         ]);
         $this->layout->{'rightSection'} = $html;
     }

}
