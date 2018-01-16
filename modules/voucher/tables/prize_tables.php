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
        ['master' => 'title', 'name' => 'prize'],
        'timestamps' => true,
        'history' => [
            'group' => 'prize_tables',
            'item' => 'prize'
        ],
];
