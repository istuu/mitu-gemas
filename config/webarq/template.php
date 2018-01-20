<?php
/**
 * Created by PhpStorm
 * Date: 15/02/2017
 * Time: 21:29
 * Author: Daniel Simangunsong
 *
 * Calm seas, never make skill full sailors
 */

return [
        'names' => [
                'home' => [
                        'name' => 'Home',
                        'thumb' => '',
                        'sections' => [
                            'banner',
                            'promo',
                            'form',
                            'prize',
                            'winner',
                            'regulation',
                            'history',
                        ]
                ],
        ],
        'sections' => [
                'banner' => [
                        'name' => 'Banner',
                        'raw' => true
                ],
                'promo' => [
                        'name' => 'Promo',
                        'raw' => true
                ],
                'form' => [
                        'name' => 'Form',
                        'raw' => true
                ],
                'prize' => [
                        'name' => 'Prize',
                        'raw' => true
                ],
                'winner' => [
                        'name' => 'Winner',
                        'raw' => true
                ],
                'regulation' => [
                        'name' => 'Regulation',
                        'raw' => true
                ],
                'history' => [
                        'name' => 'History',
                        'raw' => true
                ],
                'leads' => [
                        'name' => 'Leads Form',
                        'raw' => function() {
                                return Wa::manager('site.lead', Wa::menu()->getActive()->lead)->toHtml();
                        }
                ]
        ],
        'modals' => [
                'default' => 'Are you sure you want to do this?',
                'delete' => 'This action will remove selected item from database, and cannot be undone. Do you want to continue ?',
        ]
];
