<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/16/2017
 * Time: 12:08 PM
 */

return [
        ['master' => 'id'],
        ['master' => 'title', 'name' => 'type'],
        ['master' => 'title', 'name' => 'unique_code'],
        ['master' => 'title', 'name' => 'prize'],
        ['master' => 'title', 'name' => 'status'],
        'timestamps' => true,
        'history' => [
            'group' => 'vouchers',
            'item' => 'unique_code'
        ],
];
