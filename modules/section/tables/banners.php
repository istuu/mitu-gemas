<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/16/2017
 * Time: 12:08 PM
 */

return [
        ['master' => 'id'],
        ['master' => 'title', 'name' => 'background'],
        ['master' => 'title', 'name' => 'image_1'],
        ['master' => 'title', 'name' => 'image_2'],
        ['master' => 'longTitle', 'name' => 'text'],
        ['master' => 'title', 'name' => 'button'],
        'timestamps' => true,
        'history' => [
            'group' => 'banners',
            'item' => 'text'
        ],
];
