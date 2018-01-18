<?php

namespace App\Http\Controllers\Site\Templates;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\BaseController;
use App\Libraries\Mailer;
use Validator;
use Wa;
use DB;
use URL;
use Browser;

class HomeController extends BaseController
{
    public function before()
    {
        $this->mail = new Mailer;
        $banner  = Wa::model('banner')->first();
        $section = Wa::model('section')->where('template','home')->orderBy('sequence')->get();
        $promo_title = Wa::model('promo_title')->first();
        $promo_steps = Wa::model('promo_step')->where('is_active',1)->orderBy('sequence')->get();
        $regulation  = Wa::model('regulation')->first();
        $provinces   = Wa::model('province')->get();
        view()->share([
            'banner'   => $banner,
            'sections' => $section,
            'promo_title' => $promo_title,
            'promo_steps' => $promo_steps,
            'regulation'  => $regulation,
            'provinces'   => $provinces
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

            default:
                return $this->actionGetForbidden();

        }
    }

    public function submitExchangeData($request){
        $rules = array(
            'g-recaptcha-response' =>'required|captcha:' . env('INVISIBLE_RECAPTCHA_SECRETKEY'),
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
            return redirect()->back()->with('validated', 'Silakan lengkapi form anda terlabih dahulu!')->withInput();
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

                $status = $voucher->type == 'pulsa' ? 'valid':'confirm';
                $type   = $voucher->type == 'pulsa' ? 'pulsa_valid':'emas_confirm';

                $model = Wa::model('exchange_code');
                $this->submitModel($request,$model,$status,$voucher->id);

                //Send Email to User
                $request['prize'] = $voucher->prize;
                $this->mail->actionMail($request,$type);
                DB::commit();

                $notif = Wa::model('notification')->where('type',$type)->first();
                $notif['description'] = $this->replaceDesc($voucher->prize,$notif->description);
                return redirect()->back()->with('success', $notif);

            }else{

                if(Wa::model('voucher')->where('unique_code',$request->unique_code)->count() > 0){
                    $model = Wa::model('exchange_code');
                    $this->submitModel($request,$model,'duplicate',$voucher->id);
                    DB::commit();

                    $notif = Wa::model('notification')->where('type','duplicate')->first();
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

}
