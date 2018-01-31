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
class ExchangeCodesController extends BaseController
{
    public function before(){
        $this->model = new Model;
        $this->mail = new Mailer;

        $this->path  = 'site/exports/Exchange Codes.xls';
    }

    public function actionAjaxGetExport()
    {
        $start = request()->start;
        $end   = request()->end;
        $model = Wa::model('exchange_code');
        if($start !== ''){
            $model = $model->where('create_on','>=',date('Y-m-d H:i:s',strtotime($start)));
        }
        if($end !== ''){
            $model = $model->where('create_on','<=',date('Y-m-d H:i:s',strtotime($end)));
        }
        $model = $model->get();

        try{
            foreach ($model as $key => $value) {
                $data[$key]['No']       = $key+1;
                $data[$key]['Name']     = $value->name;
                $data[$key]['Email']    = $value->email;
                $data[$key]['Phone']    = $value->phone;
                $data[$key]['Unique Code']   = $value->vouchers->unique_code;
                $data[$key]['Prize Type']    = $value->vouchers->type;
                $data[$key]['Prize']    = $value->vouchers->prize;
                $data[$key]['ID Card Number']    = $value->id_card;
                $data[$key]['Province'] = $value->provinces->name;
                $data[$key]['City']   = $value->regencies->name;
                $data[$key]['Gender'] = ucwords($value->gender);
                $data[$key]['Media']  = ucwords($value->media);
                $data[$key]['Browser'] = $value->browser;
                $data[$key]['Status'] = $value->status;
                $data[$key]['Submitted At'] = $value->create_on;

            }
            $filename = 'Exchange Codes';

            return $this->handleExport($filename, $data, $this->path);

        }catch(\Exception $e){
            return 'failed';
            // return $e->getMessage();
        }
     }

     public function actionGetDetail(){
         $model = Wa::model('exchange_code')->find(request()->segment(5));
         $html = view('panel.exchange-detail',[
             'model'     => $model,
         ]);
         $this->layout->{'rightSection'} = $html;
     }

     public function actionAjaxGetModal(Request $request){
         $model = Wa::model('exchange_code')->find($request->id);
         return view('panel.modal',[
                'model' => $model
         ]);
     }

     public function actionPostComment(Request $request){
         $model = Wa::model('exchange_code')->find($request->id);
         try{
             $model->comment = $request->comment;
             $model->status  = $request->status;
             $model->save();

             $this->mail->actionMail($model,$model->vouchers->type.'_'.$model->status);

             $this->setTransactionMessage('Data has been updated', 'success');
         }catch(\Exception $e){
             $this->setTransactionMessage('Woops, '.$e->getMessage(), 'error');
         }
         return redirect('admin-panel/helper/listing/exchange/exchange_codes');
     }

}
