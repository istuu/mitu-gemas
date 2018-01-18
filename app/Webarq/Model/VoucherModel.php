<?php

namespace App\Webarq\Model;


use Webarq\Model\AbstractListingModel;

class VoucherModel extends AbstractListingModel
{
    protected $table = 'vouchers';

    public function prizes(){
        return $this->belongsTo('App\Webarq\Model\PrizeTable','prize_id');
    }
}
