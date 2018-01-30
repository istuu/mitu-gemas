<?php
$id = Wa::model('banner')->firstOrFail()->id;
return [
        'permalink' => 'helper/form/edit/section/banners/'.$id,
        'type' => 'listing',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'text',
                                'button'
                        ]
                ],
        ],
        'actions' => [
                // 'create' => [
                //         'form' => [
                //                 'attributes' => [
                //                         'enctype' => 'multipart/form-data',
                //                 ],
                //                 'section.banners.background' => [
                //                         'info' => 'Please use image in 1500px X 970px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)',
                //                         'file' => [
                //                                 'type' => 'image',
                //                                 'mimes' => ['jpg', 'jpeg', 'png'],
                //                                 'max' => 1024,
                //                                 'upload-dir' => 'site/uploads/images',
                //                                 'resize' => [
                //                                         'width' => 1500,
                //                                         'height' => 970,
                //                                 ]
                //                         ],
                //                         'id'=>'bg',
                //                         'container'=>'form.images'
                //                 ],
                //                 'section.banners.image_1' => [
                //                         'info' => 'Please use image in 870px X 302px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)',
                //                         'file' => [
                //                                 'type' => 'image',
                //                                 'mimes' => ['jpg', 'jpeg', 'png'],
                //                                 'max' => 1024,
                //                                 'upload-dir' => 'site/uploads/images',
                //                                 'resize' => [
                //                                         'width' => 870,
                //                                         'height' => 302,
                //                                 ]
                //                         ],
                //                         'id'=>'image1',
                //                         'container'=>'form.images'
                //                 ],
                //                 'section.banners.image_2' => [
                //                         'info' => 'Please use image in 594px X 98px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)',
                //                         'file' => [
                //                                 'type' => 'image',
                //                                 'mimes' => ['jpg', 'jpeg', 'png'],
                //                                 'max' => 1024,
                //                                 'upload-dir' => 'site/uploads/images',
                //                                 'resize' => [
                //                                         'width' => 594,
                //                                         'height' => 98,
                //                                 ]
                //                         ],
                //                         'id'=>'image2',
                //                         'container'=>'form.images'
                //                 ],
                //                 'section.banners.text' => [
                //                         'type' => 'textarea',
                //                         'rows' => 3
                //                 ],
                //                 'section.banners.button'
                //         ]
                // ],

                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.banners.background' => [
                                        'info' => 'Please use image in 1500px X 970px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)',
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 1024,
                                                'upload-dir' => 'site/uploads/images',
                                                'resize' => [
                                                        'width' => 1500,
                                                        'height' => 970,
                                                ]
                                        ],
                                        'id'=>'bg',
                                        'container'=>'form.images',
                                        'ignored' => true,
                                        'required' => false
                                ],
                                'section.banners.image_1' => [
                                        'info' => 'Please use image in 870px X 302px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)',
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 1024,
                                                'upload-dir' => 'site/uploads/images',
                                                'resize' => [
                                                        'width' => 870,
                                                        'height' => 302,
                                                ]
                                        ],
                                        'id'=>'image1',
                                        'container'=>'form.images',
                                        'ignored' => true,
                                        'required' => false
                                ],
                                'section.banners.image_2' => [
                                        'info' => 'Please use image in 594px X 98px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)',
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 1024,
                                                'upload-dir' => 'site/uploads/images',
                                                'resize' => [
                                                        'width' => 594,
                                                        'height' => 98,
                                                ]
                                        ],
                                        'id'=>'image2',
                                        'container'=>'form.images',
                                        'ignored' => true,
                                        'required' => false
                                ],
                                'section.banners.text' => [
                                        'type' => 'textarea',
                                        'class' => 'ckeditor'
                                ],
                                'section.banners.button'
                        ]
                ],
                // 'delete'
        ]
];
