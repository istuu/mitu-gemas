<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/15/2017
 * Time: 4:59 PM
 */

return [
        'icon'=>'fa-envelope-square',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'email',
                                'name',
                                'is_active'
                        ],
                ],
                'data-tables' => true,
                'pagination' => null
        ],

        'actions' => [
                'create' => [
                        'form' => [
                                'system.email_recipients.email',
                                'system.email_recipients.name',
                                'system.email_recipients.is_active' => [
                                        'value' => 1
                                ],
                        ],
                ],
                'edit' => [
                        'form' => [
                                'system.email_recipients.email',
                                'system.email_recipients.name',
                                'system.email_recipients.is_active' => [
                                        'value' => 1
                                ],
                        ],
                ],
                'activeness',
                'delete'
        ]
];
