<?php

namespace App\Http\Controllers\Site\Templates;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\BaseController;
use Wa;
use URL;

class HomeController extends BaseController
{
    public function before()
    {
        $banner  = Wa::model('banner')->first();
        $section = Wa::model('section')->where('template','home')->orderBy('sequence')->get();
        view()->share([
            'banner'   => $banner,
            'sections' => $section
        ]);
        parent::before();
    }
}
