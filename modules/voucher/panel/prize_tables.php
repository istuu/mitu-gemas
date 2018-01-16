<?php
return [
        'type' => 'listing',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'type' => [
                                    'modifier' => 'ucwords'
                                ],
                                'prize' => [
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
                                'voucher.prize_tables.type' => [
                                        'type' => 'select',
                                        'options' => [
                                                'emas' => 'Emas',
                                                'pulsa' => 'Pulsa'
                                        ]
                                ],
                                'voucher.prize_tables.prize'
                        ]
                ],

                'edit' => [
                        'form' => [
                                'voucher.prize_tables.type' => [
                                        'type' => 'select',
                                        'options' => [
                                                'emas' => 'Emas',
                                                'pulsa' => 'Pulsa'
                                        ]
                                ],
                                'voucher.prize_tables.prize'
                        ]
                ],
                'delete'
        ]
];
