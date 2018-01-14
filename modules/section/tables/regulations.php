<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/16/2017
 * Time: 12:08 PM
 */

return [
        ['master' => 'id'],
        ['master' => 'title', 'name' => 'title'],
        ['master' => 'description', 'name' => 'description'],
        'timestamps' => true,
        'history' => [
            'group' => 'regulations',
            'item' => 'text'
        ],
];
