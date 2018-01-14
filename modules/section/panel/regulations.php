<?php
$id = Wa::model('regulation')->firstOrFail()->id;
return [
        'permalink' => 'helper/form/edit/section/regulations/'.$id,
        'type' => 'listing',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'title',
                                'description'
                        ]
                ],
        ],
        'actions' => [
                // 'create' => [
                //         'form' => [
                //                 'section.regulations.title',
                //                 'section.regulations.description' => [
                //                         'type' => 'textarea',
                //                         'class' => 'ckeditor'
                //                 ],
                //         ]
                // ],

                'edit' => [
                        'form' => [
                                'section.regulations.title',
                                'section.regulations.description' => [
                                        'type' => 'textarea',
                                        'class' => 'ckeditor'
                                ],
                        ]
                ],
                // 'delete'
        ]
];
