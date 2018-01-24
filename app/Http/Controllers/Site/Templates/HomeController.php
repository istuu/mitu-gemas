<?php

namespace App\Http\Controllers\Site\Templates;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\BaseController;
use App\Libraries\Mailer;
use GuzzleHttp\Client;
use Validator;
use Wa;
use DB;
use URL;
use Browser;

class HomeController extends BaseController
{
    public function before()
    {
        $this->client = new Client;
        $this->mail   = new Mailer;
        $banner  = Wa::model('banner')->first();
        $section = Wa::model('section')->where('template','home')->orderBy('sequence')->get();
        $promo_title = Wa::model('promo_title')->first();
        $promo_steps = Wa::model('promo_step')->where('is_active',1)->orderBy('sequence')->get();
        $prize_title = Wa::model('prize_title')->first();
        $prize_items = Wa::model('prize_item')->where('is_active',1)->orderBy('sequence')->get();
        $regulation  = Wa::model('regulation')->first();
        $provinces   = Wa::model('province')->get();
        $tables = Wa::model('exchange_code')->select('exchange_codes.*','unique_code','prize','vouchers.type','vouchers.id as voucher_id')
                    ->join('vouchers','vouchers.id','=','exchange_codes.voucher_id')
                    ->where('exchange_codes.status','valid')
                    ->orderBy('type')
                    ->paginate(10);
        $popup  = Wa::model('popup')->first();

        view()->share([
            'banner'   => $banner,
            'sections' => $section,
            'promo_title' => $promo_title,
            'promo_steps' => $promo_steps,
            'prize_title' => $prize_title,
            'prize_items' => $prize_items,
            'regulation'  => $regulation,
            'provinces'   => $provinces,
            'tables'   => $tables,
            'popup'   => $popup,
        ]);
        parent::before();
    }

    public function actionPostIndex(Request $request){
        switch ($request->type) {
            case 'selectRegency':
                $regencies = Wa::model('regency')->where('province_id',$request->id)->get();
                return view('ajax.regency',[
                    'regencies' => $regencies
                ]);

            case 'form':
                return $this->submitExchangeData($request);

            case 'history':
                return $this->submitHistory($request);

            default:
                return $this->actionGetForbidden();

        }
    }

    public function submitExchangeData($request){
        $rules = array(
            'g-recaptcha-response' => 'required|captcha',
            'name' => 'required',
            'unique_code' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'id_card' => 'required',
            'province_id' => 'required',
            'regency_id' => 'required',
            'gender' => 'required',
            'agreement' => 'required',
        );

        $validated = Validator::make($request->all(), $rules);

        if(!$validated){
            return redirect()->back()->with('info', 'Silakan lengkapi form anda terlabih dahulu!')->withInput();
        }

        try{
            DB::beginTransaction();
            $voucher_check = Wa::model('voucher')->where([
                                ['unique_code',$request->unique_code],
                                ['status','available'],
                            ])->count();


            if($voucher_check > 0){
                $voucher = Wa::model('voucher')->where('unique_code',$request->unique_code)->first();
                $voucher->status = 'used';
                $voucher->save();

                $status = $voucher->type == 'pulsa' ? 'valid':'pending';
                $type   = $voucher->type == 'pulsa' ? 'pulsa_valid':'emas_pending';

                $model = Wa::model('exchange_code');
                $this->submitModel($request,$model,$status,$voucher->id);

                //Send pulsa if type pulsa
                if($voucher->type == 'pulsa'){
                    $this->actionSendPulsa();
                }

                //Send Email to User
                $request['prize'] = $voucher->prize;
                $this->mail->actionMail($request,$type);
                DB::commit();

                $notif = Wa::model('notification')->where('type',$type)->first();
                $notif['description'] = $this->replaceDesc($voucher->prize,$notif->description);
                return redirect()->back()->with('success', $notif);

            }else{

                if(Wa::model('voucher')->where('unique_code',$request->unique_code)->count() > 0){
                    $voucher = Wa::model('voucher')->where('unique_code',$request->unique_code)->first();
                    $model = Wa::model('exchange_duplicate');
                    $this->submitModel($request,$model,'duplicate',$voucher->id);
                    DB::commit();

                    $notif = Wa::model('notification')->where('type','exchange_duplicate')->first();
                    return redirect()->back()->with('error', $notif)->withInput();
                }else{
                    $model = Wa::model('exchange_fail');
                    $this->submitModel($request,$model,'error',0);
                    DB::commit();

                    $notif = Wa::model('notification')->where('type','exchange_error')->first();
                    return redirect()->back()->with('error', $notif)->withInput();
                }
            }

        }catch(\Exception $e){
            DB::rollback();
            return redirect()->back()->with('info', 'Terjadi kesalahan, pesan errror :'.$e->getMessage())->withInput();
        }
    }

    public function submitModel($request,$model,$status,$voucher){
        $model->name        = $request->name;
        $model->voucher_id  = $voucher;
        $model->email       = $request->email;
        $model->phone       = $request->phone;
        $model->id_card     = $request->id_card;
        $model->province_id = $request->province_id;
        $model->city_id     = $request->regency_id;
        $model->gender      = $request->gender;
        $model->media       = $this->getMedia();
        $model->browser     = Browser::browserFamily();
        $model->status      = $status;
        $model->create_on   = date('Y-m-d H:i:s');
        $model->save();
    }

    public function submitHistory($request){
        $histories = Wa::model('exchange_code')
                                    ->select('exchange_codes.*','unique_code','prize','vouchers.type','vouchers.id as voucher_id')
                                    ->join('vouchers','vouchers.id','=','exchange_codes.voucher_id')
                                    ->where([['email',$request->email],['exchange_codes.status','valid'],])
                                    ->orderBy('type','voucher_id')
                                    ->get();
        return view('panel.history',[
            'histories' => $histories
        ]);
    }

    public function getMedia(){
        if(Browser::isDesktop()){
            return 'desktop';
        }elseif(Browser::isTablet()){
            return 'tablet';
        }else{
            return 'mobile';
        }
    }

    public function replaceDesc($prize, $description){
        $before = array("{{prize}}");
        $after  = array($prize);
        $newphrase = str_replace($before, $after, $description);
        return $newphrase;
    }

    public function actionSendPulsa(){
        //Integrasi API
    }

}
