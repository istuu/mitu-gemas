<?php

namespace App\Http\Controllers\Panel\Image;

use App\Http\Controllers\Panel\BaseController;

class ImageController extends BaseController
{
    public function actionGetIndex()
    {
    	$this->layout->{'rightSection'} = view('panel.image');
    }

    public function actionGetLib()
    {
    	return view('panel.lib');
    }
}
