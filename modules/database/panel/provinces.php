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
                                'section.provinces.name',
                        ]
                ],

                'edit' => [
                        'form' => [
                                'section.provinces.name',
                        ]
                ],
                'delete'
        ]
];
