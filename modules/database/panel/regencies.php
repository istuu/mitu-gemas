<?php
return [
        'type' => 'listing',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'id',
                                'provinces.name as province' => [
                                    'title'=>'Province',
                                    'on' => ['prvncs.id', '=', 'rgncs.province_id']
                                ],
                                'name'
                        ]
                ],
                'data-tables' => true,
                'pagination' => null
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'database.regencies.province_id' => [
                                         'type' => 'select table',
                                         'title' => 'Province',
                                         'sources' => [
                                            'table' => 'provinces',
                                            'column' => ['id', 'name'],
                                         ]
                                ],
                                'database.regencies.name',
                        ]
                ],

                'edit' => [
                        'form' => [
                                'database.regencies.province_id' => [
                                         'type' => 'select table',
                                         'title' => 'Province',
                                         'sources' => [
                                            'table' => 'provinces',
                                            'column' => ['id', 'name'],
                                         ]
                                ],
                                'database.regencies.name',
                        ]
                ],
                'delete'
        ]
];
