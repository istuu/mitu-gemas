<?php
return [
        'type' => 'listing',
        'title' => 'Voucher Emas',
        'table' => 'vouchers',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'id',
                                'unique_code',
                                'prize',
                                'status' => [
                                    'modifier' => 'ucwords'
                                ]
                        ]
                ],
                'where' => ['type' => 'emas'],
                'data-tables' => true,
                'pagination' => null
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'title' => 'Create Voucher Emas',
                                'voucher.vouchers.type' => [
                                        'value' => 'emas',
                                        'type' => 'hidden'
                                ],
                                'voucher.vouchers.unique_code',
                                'voucher.vouchers.prize',
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
                                'title' => 'Create Voucher Emas',
                                'voucher.vouchers.type' => [
                                        'value' => 'emas',
                                        'type' => 'hidden'
                                ],
                                'voucher.vouchers.unique_code',
                                'voucher.vouchers.prize',
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
