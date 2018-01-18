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
                                'province.name' => [
                                        'title' => 'Province',
                                        'on' => ['prvncs.id','=','xchngfls.province_id']
                                ],
                                'regencies.name' => [
                                        'title' => 'Regency',
                                        'on' => ['rgncs.id','=','xchngfls.city_id']
                                ],
                                // 'case'
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
                'delete'
        ]
];
