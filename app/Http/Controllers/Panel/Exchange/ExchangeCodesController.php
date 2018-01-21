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
