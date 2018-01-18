<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/15/2017
 * Time: 4:59 PM
 */

return [
        'icon'=>'fa-at',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'type',
                                'from_name',
                                'from_email',
                                'subject',
                                'description' => [
                                        'modifier' => 'words:20|strip_tags'
                                ]
                        ],
                ],
                'data-tables' => true,
                'pagination' => null
        ],

        'actions' => [
                // 'create' => [
                //         'form' => [
                //                 'system.email_templates.type',
                //                 'system.email_templates.from_name',
                //                 'system.email_templates.from_email',
                //                 'system.email_templates.subject',
                //                 'system.email_templates.description' => [
                //                         'type' => 'textarea',
                //                         'class' => 'ckeditor'
                //                 ],
                //         ],
                // ],
                'edit' => [
                        'form' => [
                                // 'system.email_templates.type',
                                'system.email_templates.from_name',
                                'system.email_templates.from_email',
                                'system.email_templates.subject',
                                'system.email_templates.description' => [
                                        'type' => 'textarea',
                                        'class' => 'ckeditor'
                                ],
                        ]
                ],
        ]
];
