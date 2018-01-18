<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/15/2017
 * Time: 4:59 PM
 */

return [
        'icon'=>'fa-info-circle',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'type',
                                'title',
                                'description'
                        ],
                ],
                'data-tables' => true,
                'pagination' => null
        ],

        'actions' => [
                // 'create' => [
                //         'form' => [
                //                 'system.socials.type',
                //                 'system.socials.title',
                //                 'system.socials.description',
                //         ],
                // ],
                'edit' => [
                        'form' => [
                                // 'system.notifications.type',
                                'system.notifications.title',
                                'system.notifications.description',
                        ]
                ],
                // 'activeness',
                // 'delete'
        ]
];
