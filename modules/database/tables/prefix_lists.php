<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/16/2017
 * Time: 12:08 PM
 */

return [
        ['master' => 'id'],
        ['master' => 'title', 'name' => 'code'],
        ['master' => 'title', 'name' => 'name'],
        ['master' => 'title', 'name' => 'prefix'],
        'timestamps' => true,
        'history' => [
            'group' => 'prefix_lists',
            'item' => 'text'
        ],
];
