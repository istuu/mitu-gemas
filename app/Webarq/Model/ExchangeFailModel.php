<?php

namespace App\Webarq\Model;


use Webarq\Model\AbstractListingModel;

class ExchangeFailModel extends AbstractListingModel
{
    protected $table = 'exchange_fails';

    public function provinces(){
        return $this->belongsTo('App\Webarq\Model\ProvinceModel','province_id');
    }

    public function regencies(){
        return $this->belongsTo('App\Webarq\Model\RegencyModel','city_id');
    }
}
