<?php

namespace App\Webarq\Model;


use Webarq\Model\AbstractListingModel;

class ExchangeDuplicateModel extends AbstractListingModel
{
    protected $table = 'exchange_duplicates';

    public function vouchers(){
        return $this->belongsTo('App\Webarq\Model\VoucherModel','voucher_id');
    }

    public function provinces(){
        return $this->belongsTo('App\Webarq\Model\ProvinceModel','province_id');
    }

    public function regencies(){
        return $this->belongsTo('App\Webarq\Model\RegencyModel','city_id');
    }
}
