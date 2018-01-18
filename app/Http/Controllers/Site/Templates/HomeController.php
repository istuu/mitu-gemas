<?php

namespace App\Http\Controllers\Site\Templates;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\BaseController;
use Wa;
use DB;
use URL;
use Browser;

class HomeController extends BaseController
{
    public function before()
    {
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
        // try{
        //     DB::beginTransaction();
            $voucher_check = Wa::model('voucher')->where([
                                ['unique_code',$request->unique_code],
                                ['status','available'],
                            ])->count();

            if($voucher_check > 0){
                $voucher = Wa::model('voucher')->where('unique_code',$request->unique_code)->first();
                $voucher->status = 'used';
                $voucher->save();

                $model = Wa::model('exchange_code');
                $this->submitModel($request,$model,'no',$voucher->id);

                return redirect()->back()->with('success', 'Selamat, anda mendapatkan hadiah !');

            }else{
                $model = Wa::model('exchange_fail');
                if(Wa::model('voucher')->where('unique_code',$request->unique_code)->count() > 0){
                    $this->submitModel($request,$model,'duplicate',0);
                    return redirect()->back()->with('error', 'Maaf, kode verifikasi sudah pernah digunakan!');
                }else{
                    $this->submitModel($request,$model,'error',0);
                    return redirect()->back()->with('error', 'Maaf, kode verifikasi yang anda masukkan salah!');
                }
            }

            DB::commit();
        // }catch(\Exception $e){
        //     DB::rollback();
        //     return redirect()->back()->with('error', 'Terjadi kesalahan, pesan errror :'.$e->getMessage())->withInput();
        // }
    }

    public function submitModel($request,$model,$case,$voucher){
        $model->name = $request->name;
        $model->voucher_id = $voucher;
        $model->email = $request->email;
        $model->phone = $request->phone;
        $model->id_card = $request->id_card;
        $model->province_id = $request->province_id;
        $model->city_id  = $request->regency_id;
        $model->gender = $request->gender;
        $model->media  = $this->getMedia();
        $model->browser= Browser::browserFamily();
        if($case !== 'no'){
            $model->case = $case;
        }
        $model->create_on = date('Y-m-d H:i:s');
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


}
