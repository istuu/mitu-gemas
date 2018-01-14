<?php

namespace App\Http\Controllers\Site\Templates;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\BaseController;
use Wa;
use URL;
use Browser;
use Location;

class HomeController extends BaseController
{
    public function before()
    {
        $banner  = Wa::model('banner')->first();
        $section = Wa::model('section')->where('template','home')->orderBy('sequence')->get();
        $promo_title = Wa::model('promo_title')->first();
        $promo_steps = Wa::model('promo_step')->where('is_active',1)->orderBy('sequence')->get();
        $regulation  = Wa::model('regulation')->first();
        view()->share([
            'banner'   => $banner,
            'sections' => $section,
            'promo_title' => $promo_title,
            'promo_steps' => $promo_steps,
            'regulation'  => $regulation
        ]);
        parent::before();
    }
}
