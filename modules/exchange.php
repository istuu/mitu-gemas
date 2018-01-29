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
        'icon' => 'fa-exchange',
        'tables' => [
                'exchange_codes',
                'exchange_duplicates',
                'exchange_fails',
        ],
        'panels' => [
                // 'exchange_datas' => [
                //         'permalink' => 'exchange/exchange_datas',
                //         'title' => 'Exchange All',
                //         'guarded' => false,
                // ],
                'exchange_codes',
                'exchange_duplicates',
                'exchange_fails',
        ]
];
