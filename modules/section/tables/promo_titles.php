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
        ['master' => 'title', 'name' => 'video_link'],
        'timestamps' => true,
        'history' => [
            'group' => 'promo_titles',
            'item' => 'text'
        ],
];
