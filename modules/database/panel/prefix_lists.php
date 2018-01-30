<?php
return [
        'type' => 'listing',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'code',
                                'name',
                                'prefix'
                        ]
                ],
                'data-tables' => true,
                'pagination' => null
        ],
        'actions' => [
                'create' => [
                        'form' => [
                            'database.prefix_lists.code',
                            'database.prefix_lists.name',
                            'database.prefix_lists.prefix',
                        ]
                ],

                'edit' => [
                        'form' => [
                            'database.prefix_lists.code',
                            'database.prefix_lists.name',
                            'database.prefix_lists.prefix',
                        ]
                ],
                'delete'
        ]
];
