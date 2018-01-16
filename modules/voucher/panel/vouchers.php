<?php
return [
        'type' => 'listing',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'id',
                                'prize_tables.type' => [
                                    'title'=>'Type',
                                    'on' => ['prztbls.id', '=', 'vchrs.prize_id'],
                                    'modifier' => 'ucwords'
                                ],
                                'unique_code',
                                'prize_tables.prize' => [
                                    'title'=>'Prize',
                                    'on' => ['prztbls.id', '=', 'vchrs.prize_id']
                                ],
                                'status' => [
                                    'modifier' => 'ucwords'
                                ]
                        ]
                ],
                'data-tables' => true,
                'pagination' => null
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'voucher.vouchers.prize_id' => [
                                         'type' => 'select table',
                                         'title' => 'Prize',
                                         'sources' => [
                                             'table' => 'prize_tables',
                                             'column' => ['id', 'prize'],
                                         ]
                                ],
                                'voucher.vouchers.unique_code',
                                'voucher.vouchers.status' => [
                                        'type' => 'select',
                                        'options' => [
                                                'available' => 'Available',
                                                'used' => 'Used'
                                        ]
                                ],
                        ]
                ],

                'edit' => [
                        'form' => [
                                'voucher.vouchers.prize_id' => [
                                         'type' => 'select table',
                                         'title' => 'Prize',
                                         'sources' => [
                                             'table' => 'prize_tables',
                                             'column' => ['id', 'prize'],
                                         ]
                                ],
                                'voucher.vouchers.unique_code',
                                'voucher.vouchers.status' => [
                                        'type' => 'select',
                                        'options' => [
                                                'available' => 'Available',
                                                'used' => 'Used'
                                        ]
                                ],
                        ]
                ],
                'export'=>[
                        'label'=>'Export',
                        'permalink'=>true,
                        'placement'=>'header',
                        'id'=>'btn-export',
                ],
                'import'=>[
                        'label'=>'Import',
                        'icon' => 'fa-upload',
                        'permalink'=>true,
                        'placement'=>'header',
                ],
                'delete'
        ]
];
