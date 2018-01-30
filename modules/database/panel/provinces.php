<?php
return [
        'type' => 'listing',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'id',
                                'name'
                        ]
                ],
                'data-tables' => true,
                'pagination' => null
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'database.provinces.name',
                        ]
                ],

                'edit' => [
                        'form' => [
                                'database.provinces.name',
                        ]
                ],
                'delete'
        ]
];
