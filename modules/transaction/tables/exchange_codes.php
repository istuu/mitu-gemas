<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/16/2017
 * Time: 12:08 PM
 */

return [
        ['master' => 'id'],
        ['master' => 'int', 'name' => 'voucher_id'],
        ['master' => 'title', 'name' => 'name'],
        ['master' => 'title', 'name' => 'email'],
        ['master' => 'title', 'name' => 'phone'],
        ['master' => 'title', 'name' => 'id_card'],
        ['master' => 'title', 'name' => 'province_id'],
        ['master' => 'title', 'name' => 'city_id'],
        ['master' => 'title', 'name' => 'gender'],
        ['master' => 'title', 'name' => 'media'],
        ['master' => 'title', 'name' => 'browser'],
        ['master' => 'title', 'name' => 'case'],
        'timestamps' => true,
        'history' => [
            'group' => 'vouchers',
            'item' => 'unique_code'
        ],
];
