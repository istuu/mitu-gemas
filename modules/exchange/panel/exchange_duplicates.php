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
                                        'on' => ['vchrs.id','=','xchngdplcts.voucher_id']
                                ],
                                'vouchers.prize' => [
                                        'title'=>'Prize',
                                        'on' => ['vchrs.id', '=', 'xchngdplcts.voucher_id']
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
                'detail'=>[
                        'icon' => 'fa-list',
                        'permalink'=>true,
                ],
                // 'delete'
        ]
];
