<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 3/15/2017
 * Time: 4:59 PM
 */
$id = Wa::model('popup')->firstOrFail()->id;

return [
        'permalink' => 'helper/form/edit/system/popups/'.$id,
        'icon'=>'fa-certificate',
        'title' => 'Pop up',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'title',
                                'image',
                                'is_active' => ['guarded' => false]
                        ],
                        'is_active'  => [
                                'guarded' => true
                        ]
                ],
                'data-tables' => true,
                'pagination' => null
        ],

        'actions' => [
                'create' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'system.popups.title',
                                'system.popups.image' => [
                                        'info' => 'Please use image tipe of file, (format file: .png, .jpg, .jpeg | Max: 1MB)',
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 1024,
                                                'upload-dir' => 'site/uploads/images',
                                        ],
                                        'id'=>'image',
                                        'container'=>'form.images',
                                        'ignored' => true,
                                        'required' => false
                                ],
                                'system.popups.is_active',
                        ],
                ],
                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'system.popups.title',
                                'system.popups.image' => [
                                        'info' => 'Please use image tipe of file, (format file: .png, .jpg, .jpeg | Max: 1MB)',
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 1024,
                                                'upload-dir' => 'site/uploads/images',
                                        ],
                                        'id'=>'image',
                                        'container'=>'form.images',
                                        'ignored' => true,
                                        'required' => false
                                ],
                                'system.popups.is_active',
                        ],
                ],
                // 'activeness',
                // 'delete'
        ]
];
