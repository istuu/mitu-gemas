<?php

namespace App\Http\Controllers\Panel\Exchange;

use Illuminate\Http\Request;
use App\Http\Controllers\Panel\BaseController;
use App\Webarq\Model\VoucherModel as Model;
use App\Libraries\Mailer;
use File;
use Excel;
use Wa;
use DB;
class ExchangeFailsController extends BaseController
{
    public function before(){
        $this->model = new Model;
        $this->mail = new Mailer;

        $this->path  = 'site/exports/Exchange Fails.xls';
    }

    public function actionAjaxGetExport()
    {
        $model = Wa::model('exchange_fail')->get();

        try{
            foreach ($model as $key => $value) {
                $data[$key]['No']       = $key+1;
                $data[$key]['Name']     = $value->name;
                $data[$key]['Email']    = $value->email;
                $data[$key]['Phone']    = $value->phone;
                $data[$key]['ID Card Number']    = $value->id_card;
                $data[$key]['Province'] = $value->provinces->name;
                $data[$key]['City']   = $value->regencies->name;
                $data[$key]['Gender'] = ucwords($value->gender);
                $data[$key]['Media']  = ucwords($value->media);
                $data[$key]['Browser'] = $value->browser;
                $data[$key]['Status'] = $value->status;
                $data[$key]['Submitted At'] = $value->create_on;

            }
            $filename = 'Exchange Fails';

            return $this->handleExport($filename, $data, $this->path);

        }catch(\Exception $e){
            return 'failed';
        }
     }

     public function actionGetDetail(){
         $model = Wa::model('exchange_fail')->find(request()->segment(5));
         $html = view('panel.exchange-fail',[
             'model'     => $model,
         ]);
         $this->layout->{'rightSection'} = $html;
     }

}
