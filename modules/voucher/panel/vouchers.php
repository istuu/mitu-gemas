<?php
return [
        'type' => 'listing',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'id',
                                'unique_code',
                                'status',
                                'type'
                        ]
                ],
                'data-tables' => true,
                'pagination' => null
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'voucher.vouchers.unique_code',
                                'voucher.vouchers.status' => [
                                        'type' => 'select',
                                        'options' => [
                                                'available' => 'Available',
                                                'used' => 'Used'
                                        ]
                                ],
                                'voucher.vouchers.type' => [
                                        'type' => 'select',
                                        'options' => [
                                                'emas' => 'Emas',
                                                'pulsa' => 'Pulsa'
                                        ]
                                ],
                        ]
                ],

                'edit' => [
                        'form' => [
                                'voucher.vouchers.unique_code',
                                'voucher.vouchers.status' => [
                                        'type' => 'select',
                                        'options' => [
                                                'available' => 'Available',
                                                'used' => 'Used'
                                        ]
                                ],
                                'voucher.vouchers.type' => [
                                        'type' => 'select',
                                        'options' => [
                                                'emas' => 'Emas',
                                                'pulsa' => 'Pulsa'
                                        ]
                                ],
                        ]
                ],
                'export'=>[
                        'label'=>'Export',
                        'permalink'=>true,
                        'placement'=>'header',
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
