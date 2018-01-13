<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/15/2017
 * Time: 4:59 PM
 */

return [
        'icon'=>'fa-heart',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'title',
                                'sequence',
                                'icon',
                                'permalink',
                                'is_active' => ['guarded' => false]
                        ],
                        'is_active'  => [
                                'guarded' => true
                        ]
                ],
                'sequence' => ['sequence'],
                'data-tables' => true,
                'pagination' => null
        ],

        'actions' => [
                'create' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'system.socials.title',
                                'system.socials.icon' => [
                                        'info' => "Please use Font Awesome icon code, source : http://fontawesome.io/icons/",
                                        'placeholder' => 'fa-icons',
                                ],
                                'system.socials.permalink' => [
                                        'rules' => 'url'
                                ],
                                'system.socials.is_active',
                                'system.socials.sequence'
                        ],
                ],
                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'system.socials.title',
                                'system.socials.icon' => [
                                    'info' => "Please use Font Awesome icon code, source : http://fontawesome.io/icons/",
                                    'placeholder' => 'fa-icons',
                                ],
                                'system.socials.permalink' => [
                                        'rules' => 'url'
                                ],
                                'system.socials.is_active',
                                'system.socials.sequence'
                        ]
                ],
                'activeness',
                'delete'
        ]
];
