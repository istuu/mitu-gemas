<?php

namespace App\Http\Controllers\Panel\Section;

use App\Http\Controllers\Panel\BaseController;

class PromoController extends BaseController
{
    public function actionGetIndex()
    {
    	$this->layout->{'rightSection'} = view('panel.promo');
    }
}
