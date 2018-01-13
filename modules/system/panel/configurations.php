<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/13/2017
 * Time: 10:49 AM
 *
 * > Buka cmd (run as administrator)
 * > ketik --> netsh winsock reset --> enter
 * > ketik --> ipconfig /flushdns  --> enter
 * > restart computer
 * > coba lagi browsing, pasti sudah normal kembali
 */

return [
        'type' => 'configuration',
        'icon' => 'fa-gear',
        'actions' => [
                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data'
                                ],
// Cms block
                                'cmsLogo' => [
                                        'info' => 'Please use image in 224px X 216px dimension',
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['png', 'jpg', 'jpeg', 'gif'],
                                                'max' => 200,
                                                'resize' => [
                                                        'width' => 224,
                                                        'height' => 216
                                                ],
                                        ],
                                        'id'=>'logo',
                                        'container'=>'form.images'
                                ],
                                'cmsTitle' => [
                                        'type' => 'text'
                                ],
                                'cmsShortTitle' => [
                                        'type' => 'text',
                                        'length' => 2,
                                ],
                                'favicon' => [
                                        'info' => 'Please use image in 16px X 16px dimension',
                                        'file' => [
                                                'mimes' => ['png', 'ico'],
                                                'max' => 1024,
                                                'file-name' => 'favicon',
                                        ],
                                        'id'=>'favicon',
                                        'container'=>'form.images'
                                ],
// Site block
                                'lang' => [
                                        'type' => 'select',
                                        'options' => [
                                                'en' => 'EN',
                                                'id' => 'ID'
                                        ]
                                ],
                                'siteLogo' => [
                                        'title' => 'Logo',
                                        'info' => 'Please use image in 224px X 216px dimension',
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['png', 'jpg','jpeg'],
                                                'upload-dir' => 'site/uploads/logo',
                                                'max' => 1024,
                                                'resize' => [
                                                        'width' => 224,
                                                        'height' => 216
                                                ],
                                        ],
                                        'id'=>'siteLogo',
                                        'container'=>'form.images'
                                ],
                                'siteLoginBackground' => [
                                        'title' => 'Login Background',
                                        'info' => 'Please use image in 1920px X 1080px dimension',
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['png', 'jpg', 'jpeg'],
                                                'upload-dir' => 'site/uploads/logo',
                                                'max' => 1024,
                                                'resize' => [
                                                        'width' => 1920,
                                                        'height' => 1080
                                                ],
                                        ],
                                        'id'=>'background',
                                        'container'=>'form.images'
                                ],
                                'siteCopyright' => [
                                        'type' => 'text',
                                        'length' => 200
                                ],
                                'siteOnline' => [
                                        'type' => 'select',
                                        'options' => ['Offline', 'Online'],
                                ],
                                'siteCache' => [
                                        'type' => 'select',
                                        'info' => 'Disable browser for trying to caching your website. This is '
                                                . 'helpfull when you updating your site and need immediate change. But '
                                                . 'this will slowing down your site loading on client browser'
                                ]
                        ]
                ]
        ]

];
