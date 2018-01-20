<?php
return [
        'type' => 'listing',
        'table' => 'exchange_codes',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'name',
                                'email',
                                'phone',
                                'gender',
                                // 'province.name as province' => [
                                //         'title' => 'Province',
                                //         'on' => ['prvncs.id','=','xchngcds.province_id']
                                // ],
                                // 'regencies.name as regency' => [
                                //         'title' => 'Regency',
                                //         'on' => ['rgncs.id','=','xchngcds.city_id']
                                // ],
                                'vouchers.unique_code' => [
                                        'title' => 'Unique Code',
                                        'on' => ['vchrs.id','=','xchngcds.voucher_id']
                                ],
                                'vouchers.prize' => [
                                        'title'=>'Prize',
                                        'on' => ['vchrs.id', '=', 'xchngcds.voucher_id']
                                ],
                        ]
                ],
                'where' => ['xchngcds.status' => 'duplicate'],
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
                'detail'=>[
                        'icon' => 'fa-list',
                        'permalink'=>true,
                ],
                // 'delete'
        ]
];
