<?php
/**
 * Created by PhpStorm
 * Date: 18/02/2017
 * Time: 16:35
 * Author: Daniel Simangunsong
 *
 * Calm seas, never make skill full sailors
 */

return [
        'icon' => 'fa-th',
        'tables' => [
                'banners',
                'promo_titles',
                'promo_steps',
                'prize_titles',
                'prize_items',
                'regulations',
        ],
        'panels' => [
                'banners',
                'promo' => [
                        'permalink' => 'section/promo',
                        'title' => 'Promo',
                        'guarded' => false,
                ],
                'prize' => [
                        'permalink' => 'section/prize',
                        'title' => 'Prize',
                        'guarded' => false,
                ],
                'regulations',
        ]
];
