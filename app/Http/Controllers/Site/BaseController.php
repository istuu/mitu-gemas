<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/15/2017
 * Time: 5:10 PM
 */

namespace App\Http\Controllers\Site;


use Illuminate\Support\Facades\Input;
use URL;
use Wa;
use App;
use Validator;
use Response;
use Auth;
class BaseController extends \Webarq\Http\Controllers\Site\BaseController
{
    public function before()
    {
        $socials  = Wa::model('social')->where('is_active',1)->orderBy('sequence')->get();
        view()->share([
            'socials'  => $socials,
        ]);
        parent::before();
    }

    public function handleUpload($request,$name){
        $input = $request->all();
        $rules = array(
            $name => 'image|max:3000',
        );

        $validation = Validator::make($input, $rules);

        if ($validation->fails()) {
            return Response::make($validation->errors->first(), 400);
        }

        $destinationPath = 'site/uploads/images';
        $extension       = $request->file($name)->getClientOriginalExtension();
        $originalName    = $request->file($name)->getClientOriginalName();
        $fileName        = $originalName."-".str_random(5).'.' . $extension;
        $upload          = $request->file($name)->move($destinationPath, $fileName);
        return $destinationPath.'/'.$fileName;
    }

    public function handleUploadFile($request,$name){
        $file = $request->file($name);
        $destinationPath = 'site/uploads/file';
        $fileName        = $request->file($name)->getClientOriginalName();
        $upload          = $request->file($name)->move($destinationPath, $fileName);
        return $destinationPath.'/'.$fileName;
    }
}
