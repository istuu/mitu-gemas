<?php
return [
        'type' => 'listing',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'name',
                                'email',
                                'phone',
                                'gender',
                                'province.name' => [
                                        'title' => 'Province',
                                        'on' => ['prvncs.id','=','xchngcds.province_id']
                                ],
                                'regencies.name' => [
                                        'title' => 'Regency',
                                        'on' => ['rgncs.id','=','xchngcds.city_id']
                                ],
                                'vouchers.unique_code' => [
                                        'title' => 'Unique Code',
                                        'on' => ['vchrs.id','=','xchngcds.voucher_id']
                                ],
                                'prize_tables.prize' => [
                                        'title'=>'Prize',
                                        'on' => ['prztbls.id', '=', 'vchrs.prize_id']
                                ],
                        ]
                ],
                'data-tables' => true,
                'pagination' => null
        ],
        'actions' => [
                'export'=>[
                        'label'=>'Export',
                        'permalink'=>true,
                        'placement'=>'header',
                        'id'=>'btn-export',
                ],
                // 'delete'
        ]
];
