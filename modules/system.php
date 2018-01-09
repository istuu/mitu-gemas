<?php
/**
 * Created by PhpStorm
 * Date: 21/10/2016
 * Time: 8:38
 * Author: Daniel Simangunsong
 *
 * Note.
 *
 */

return [
        'title' => 'System',
        'icon' => 'fa-gears',
        'tables' => [
                'histories', 'permissions', 'configurations', 'admins', 'admin_roles', 'roles', 'menus',
                'menu_positions', 'sections', 'admin_password_resets', 'leads'
        ],
        'panels' => [
                'dashboard' => [
                        'icon' => 'fa-dashboard',
// When not set, will use system determination which is return helper/listing/index/systems/dashboard
// True will return systems/admins/listing
                        'permalink' => 'system/dashboard',
                        'class' => 'dashboard',
// When not set, will translate group name
                        'title' => 'Dashboard',
                        'guarded' => false
                ],
                'configurations',
                'leads' => [
                        'permalink' => true,
                        'actions' => [
                                'followup' => [

                                ]
                        ]
                ],
                'admins',
                'roles',
                'menus',
                'sections',
                'localization'
        ],
];