<?php return 
       [
           'installed' => [
               'histories' => [
                   'create' => 'a:8:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:9:"parent_id";a:7:{s:4:"type";s:3:"int";s:6:"length";i:10;s:8:"unsigned";b:1;s:4:"name";s:9:"parent_id";s:4:"form";a:2:{s:4:"type";s:4:"text";s:3:"max";d:4294967295;}s:6:"master";s:3:"int";s:7:"notnull";b:1;}s:10:"role_level";a:7:{s:4:"type";s:8:"smallint";s:6:"length";i:5;s:8:"unsigned";b:1;s:4:"name";s:10:"role_level";s:4:"form";a:2:{s:4:"type";s:4:"text";s:3:"max";i:65535;}s:6:"master";s:8:"smallInt";s:7:"notnull";b:1;}s:6:"action";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:25;s:7:"notnull";b:1;s:4:"name";s:6:"action";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:10:"shortTitle";}s:5:"actor";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:25;s:7:"notnull";b:1;s:4:"name";s:5:"actor";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:10:"shortTitle";}s:10:"properties";a:5:{s:4:"type";s:4:"text";s:4:"name";s:10:"properties";s:4:"form";a:1:{s:4:"type";s:8:"textarea";}s:6:"master";s:11:"description";s:7:"notnull";b:1;}s:9:"create_on";a:5:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}s:6:"master";s:8:"createOn";}}'
               ],
               'permissions' => [
                   'create' => 'a:6:{i:0;a:0:{}s:7:"role_id";a:5:{s:4:"type";s:3:"int";s:4:"name";s:7:"role_id";s:6:"length";i:11;s:8:"unsigned";b:1;s:7:"uniques";b:1;}s:6:"module";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:25;s:7:"notnull";b:1;s:4:"name";s:6:"module";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:10:"shortTitle";s:7:"uniques";b:1;}s:5:"panel";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:25;s:7:"notnull";b:1;s:4:"name";s:5:"panel";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:10:"shortTitle";s:7:"uniques";b:1;}s:10:"permission";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:25;s:7:"notnull";b:1;s:4:"name";s:10:"permission";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:10:"shortTitle";s:7:"uniques";b:1;}s:9:"create_on";a:5:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}s:6:"master";s:8:"createOn";}}'
               ],
               'configurations' => [
                   'create' => 'a:7:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:6:"module";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:6:"module";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";s:7:"uniques";b:1;}s:3:"key";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:255;s:7:"notnull";b:1;s:4:"name";s:3:"key";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:9:"longTitle";s:7:"uniques";b:1;}s:7:"setting";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:2000;s:4:"name";s:7:"setting";s:4:"form";a:1:{s:4:"type";s:8:"textarea";}s:6:"master";s:10:"shortIntro";s:7:"notnull";b:1;}s:9:"create_on";a:5:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}s:6:"master";s:8:"createOn";}s:11:"last_update";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}s:6:"master";s:10:"lastUpdate";}}'
               ],
               'admins' => [
                   'create' => 'a:9:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:8:"username";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:25;s:6:"unique";b:1;s:7:"notnull";b:1;s:4:"name";s:8:"username";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:11:"uShortTitle";}s:8:"password";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:8:"password";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:5:"email";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:6:"unique";b:1;s:7:"notnull";b:1;s:4:"name";s:5:"email";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:6:"uTitle";}s:9:"is_system";a:6:{s:4:"type";s:4:"char";s:6:"length";i:1;s:7:"default";i:0;s:4:"form";a:2:{s:4:"type";s:6:"select";s:7:"options";a:2:{i:0;s:3:"Off";i:1;s:2:"On";}}s:6:"master";s:9:"falseBool";s:4:"name";s:9:"is_system";}s:9:"is_active";a:6:{s:4:"type";s:4:"char";s:6:"length";i:1;s:7:"default";i:1;s:4:"form";a:3:{s:4:"type";s:6:"select";s:7:"options";a:2:{i:0;s:3:"Off";i:1;s:2:"On";}s:5:"value";i:1;}s:6:"master";s:4:"bool";s:4:"name";s:9:"is_active";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'admin_roles' => [
                   'create' => 'a:4:{i:0;a:2:{s:8:"admin_id";s:9:"admins:id";s:7:"role_id";s:8:"roles:id";}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:8:"admin_id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:10;s:8:"unsigned";b:1;s:4:"name";s:8:"admin_id";s:4:"form";a:2:{s:4:"type";s:4:"text";s:3:"max";d:4294967295;}s:6:"master";s:3:"int";s:9:"reference";s:9:"admins.id";s:7:"uniques";b:1;}s:7:"role_id";a:7:{s:4:"type";s:3:"int";s:6:"length";i:10;s:8:"unsigned";b:1;s:4:"name";s:7:"role_id";s:4:"form";a:2:{s:4:"type";s:4:"text";s:3:"max";d:4294967295;}s:6:"master";s:3:"int";s:7:"uniques";b:1;}}'
               ],
               'roles' => [
                   'create' => 'a:9:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:10:"role_level";a:7:{s:4:"type";s:8:"smallint";s:6:"length";i:5;s:8:"unsigned";b:1;s:4:"name";s:10:"role_level";s:4:"form";a:2:{s:4:"type";s:4:"text";s:3:"max";i:65535;}s:6:"master";s:8:"smallInt";s:7:"notnull";b:1;}s:5:"title";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:25;s:6:"unique";b:1;s:7:"notnull";b:1;s:4:"name";s:5:"title";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:11:"uShortTitle";}s:8:"is_admin";a:6:{s:4:"type";s:4:"char";s:6:"length";i:1;s:7:"default";i:0;s:4:"form";a:2:{s:4:"type";s:6:"select";s:7:"options";a:2:{i:0;s:3:"Off";i:1;s:2:"On";}}s:6:"master";s:9:"falseBool";s:4:"name";s:8:"is_admin";}s:9:"is_system";a:6:{s:4:"type";s:4:"char";s:6:"length";i:1;s:7:"default";i:0;s:4:"form";a:2:{s:4:"type";s:6:"select";s:7:"options";a:2:{i:0;s:3:"Off";i:1;s:2:"On";}}s:6:"master";s:9:"falseBool";s:4:"name";s:9:"is_system";}s:9:"is_active";a:6:{s:4:"type";s:4:"char";s:6:"length";i:1;s:7:"default";i:1;s:4:"form";a:3:{s:4:"type";s:6:"select";s:7:"options";a:2:{i:0;s:3:"Off";i:1;s:2:"On";}s:5:"value";i:1;}s:6:"master";s:4:"bool";s:4:"name";s:9:"is_active";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'menus' => [
                   'create' => 'a:15:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:9:"parent_id";a:6:{s:4:"type";s:3:"int";s:6:"length";i:10;s:8:"unsigned";b:1;s:4:"name";s:9:"parent_id";s:4:"form";a:2:{s:4:"type";s:4:"text";s:3:"max";d:4294967295;}s:6:"master";s:3:"int";}s:4:"lead";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:0;s:4:"name";s:4:"lead";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:5:"title";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:5:"title";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";s:12:"multilingual";b:1;}s:9:"permalink";a:8:{s:4:"type";s:7:"varchar";s:6:"length";i:255;s:6:"unique";b:1;s:7:"notnull";b:1;s:4:"name";s:9:"permalink";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:10:"uLongTitle";s:12:"multilingual";b:1;}s:13:"external_link";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:255;s:7:"notnull";b:0;s:4:"name";s:13:"external_link";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:9:"longTitle";}s:8:"template";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:8:"template";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:10:"meta_title";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:255;s:7:"notnull";b:1;s:4:"name";s:10:"meta_title";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:9:"longTitle";s:12:"multilingual";b:1;}s:16:"meta_description";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:2000;s:4:"name";s:16:"meta_description";s:4:"form";a:1:{s:4:"type";s:8:"textarea";}s:6:"master";s:10:"shortIntro";s:12:"multilingual";b:1;}s:9:"is_active";a:6:{s:4:"type";s:4:"char";s:6:"length";i:1;s:7:"default";i:0;s:4:"form";a:2:{s:4:"type";s:6:"select";s:7:"options";a:2:{i:0;s:3:"Off";i:1;s:2:"On";}}s:6:"master";s:9:"falseBool";s:4:"name";s:9:"is_active";}s:9:"is_system";a:6:{s:4:"type";s:4:"char";s:6:"length";i:1;s:7:"default";i:0;s:4:"form";a:2:{s:4:"type";s:6:"select";s:7:"options";a:2:{i:0;s:3:"Off";i:1;s:2:"On";}}s:6:"master";s:9:"falseBool";s:4:"name";s:9:"is_system";}s:8:"sequence";a:7:{s:4:"type";s:3:"int";s:6:"length";i:10;s:8:"unsigned";b:1;s:4:"name";s:8:"sequence";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:8:"sequence";s:5:"class";s:8:"sequence";s:3:"max";d:4294967295;}s:6:"master";s:8:"sequence";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'menu_positions' => [
                   'create' => 'a:5:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:7:"menu_id";a:7:{s:4:"type";s:3:"int";s:6:"length";i:10;s:8:"unsigned";b:1;s:4:"name";s:7:"menu_id";s:4:"form";a:2:{s:4:"type";s:4:"text";s:3:"max";d:4294967295;}s:6:"master";s:3:"int";s:7:"uniques";b:1;}s:8:"position";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:25;s:7:"notnull";b:1;s:4:"name";s:8:"position";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:10:"shortTitle";s:7:"uniques";b:1;}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'sections' => [
                   'create' => 'a:8:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:8:"template";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:25;s:7:"notnull";b:1;s:4:"name";s:8:"template";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:10:"shortTitle";}s:6:"object";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:25;s:7:"notnull";b:1;s:4:"name";s:6:"object";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:10:"shortTitle";}s:5:"title";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:25;s:7:"notnull";b:1;s:4:"name";s:5:"title";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:10:"shortTitle";}s:8:"sequence";a:7:{s:4:"type";s:3:"int";s:6:"length";i:10;s:8:"unsigned";b:1;s:4:"name";s:8:"sequence";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:8:"sequence";s:5:"class";s:8:"sequence";s:3:"max";d:4294967295;}s:6:"master";s:8:"sequence";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'admin_password_resets' => [
                   'create' => 'a:6:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:8:"admin_id";a:6:{s:4:"type";s:3:"int";s:6:"length";i:10;s:8:"unsigned";b:1;s:4:"name";s:8:"admin_id";s:4:"form";a:2:{s:4:"type";s:4:"text";s:3:"max";d:4294967295;}s:6:"master";s:3:"int";}s:5:"token";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:255;s:7:"notnull";b:1;s:4:"name";s:5:"token";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:9:"longTitle";}s:10:"expiration";a:5:{s:4:"type";s:8:"datetime";s:4:"name";s:10:"expiration";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}s:6:"master";s:8:"createOn";}s:9:"create_on";a:5:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}s:6:"master";s:8:"createOn";}}'
               ],
               'leads' => [
                   'create' => 'a:8:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:9:"lead_type";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:9:"lead_type";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:12:"landing_page";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:255;s:7:"notnull";b:1;s:4:"name";s:12:"landing_page";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:9:"longTitle";}s:9:"lead_data";a:5:{s:4:"type";s:4:"text";s:4:"name";s:9:"lead_data";s:4:"form";a:1:{s:4:"type";s:8:"textarea";}s:6:"master";s:11:"description";s:7:"notnull";b:1;}s:8:"statuses";a:6:{s:4:"type";s:4:"char";s:6:"length";i:1;s:7:"default";i:0;s:4:"form";a:2:{s:4:"type";s:6:"select";s:7:"options";a:2:{i:0;s:3:"Off";i:1;s:2:"On";}}s:6:"master";s:9:"falseBool";s:4:"name";s:8:"statuses";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'pages' => [
                   'create' => 'a:8:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:10:"section_id";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:10:"section_id";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:5:"title";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:500;s:7:"notnull";b:1;s:4:"name";s:5:"title";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:9:"longTitle";s:12:"multilingual";b:1;}s:5:"intro";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:4000;s:4:"name";s:5:"intro";s:4:"form";a:1:{s:4:"type";s:8:"textarea";}s:6:"master";s:5:"intro";s:12:"multilingual";b:1;}s:11:"description";a:5:{s:4:"type";s:4:"text";s:4:"name";s:11:"description";s:4:"form";a:1:{s:4:"type";s:8:"textarea";}s:6:"master";s:11:"description";s:12:"multilingual";b:1;}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'slides' => [
                   'create' => 'a:12:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:10:"section_id";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:10:"section_id";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:4:"path";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:4:"path";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:8:"path_tab";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:0;s:4:"name";s:8:"path_tab";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:11:"path_mobile";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:0;s:4:"name";s:11:"path_mobile";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:6:"button";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:6:"button";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";s:12:"multilingual";b:1;}s:9:"permalink";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:255;s:7:"notnull";b:1;s:4:"name";s:9:"permalink";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:9:"longTitle";}s:5:"title";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:5:"title";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";s:12:"multilingual";b:1;}s:11:"description";a:7:{s:4:"type";s:7:"varchar";s:6:"length";i:255;s:7:"notnull";b:0;s:4:"name";s:11:"description";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:9:"longTitle";s:12:"multilingual";b:1;}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'socials' => [
                   'create' => 'a:9:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:5:"title";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:5:"title";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:4:"icon";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:4:"icon";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:9:"permalink";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:255;s:7:"notnull";b:1;s:4:"name";s:9:"permalink";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:9:"longTitle";}s:8:"sequence";a:7:{s:4:"type";s:3:"int";s:6:"length";i:10;s:8:"unsigned";b:1;s:4:"name";s:8:"sequence";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:8:"sequence";s:5:"class";s:8:"sequence";s:3:"max";d:4294967295;}s:6:"master";s:8:"sequence";}s:9:"is_active";a:6:{s:4:"type";s:4:"char";s:6:"length";i:1;s:7:"default";i:1;s:4:"form";a:3:{s:4:"type";s:6:"select";s:7:"options";a:2:{i:0;s:3:"Off";i:1;s:2:"On";}s:5:"value";i:1;}s:6:"master";s:4:"bool";s:4:"name";s:9:"is_active";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'banners' => [
                   'create' => 'a:9:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:10:"background";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:10:"background";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:7:"image_1";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:7:"image_1";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:7:"image_2";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:7:"image_2";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:4:"text";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:255;s:7:"notnull";b:1;s:4:"name";s:4:"text";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:9:"longTitle";}s:6:"button";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:6:"button";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'promo_titles' => [
                   'create' => 'a:6:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:5:"title";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:5:"title";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:10:"video_link";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:10:"video_link";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'promo_steps' => [
                   'create' => 'a:8:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:5:"image";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:5:"image";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:11:"description";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:255;s:7:"notnull";b:1;s:4:"name";s:11:"description";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:9:"longTitle";}s:8:"sequence";a:7:{s:4:"type";s:3:"int";s:6:"length";i:10;s:8:"unsigned";b:1;s:4:"name";s:8:"sequence";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:8:"sequence";s:5:"class";s:8:"sequence";s:3:"max";d:4294967295;}s:6:"master";s:8:"sequence";}s:9:"is_active";a:6:{s:4:"type";s:4:"char";s:6:"length";i:1;s:7:"default";i:0;s:4:"form";a:2:{s:4:"type";s:6:"select";s:7:"options";a:2:{i:0;s:3:"Off";i:1;s:2:"On";}}s:6:"master";s:9:"falseBool";s:4:"name";s:9:"is_active";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'regulations' => [
                   'create' => 'a:6:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:5:"title";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:5:"title";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:11:"description";a:4:{s:4:"type";s:4:"text";s:4:"name";s:11:"description";s:4:"form";a:1:{s:4:"type";s:8:"textarea";}s:6:"master";s:11:"description";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'provinces' => [
                   'create' => 'a:5:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:4:"name";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:4:"name";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'regencies' => [
                   'create' => 'a:6:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:10:"regency_id";a:6:{s:4:"type";s:3:"int";s:6:"length";i:10;s:8:"unsigned";b:1;s:4:"name";s:10:"regency_id";s:4:"form";a:2:{s:4:"type";s:4:"text";s:3:"max";d:4294967295;}s:6:"master";s:3:"int";}s:4:"name";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:4:"name";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'vouchers' => [
                   'create' => 'a:6:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:11:"unique_code";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:11:"unique_code";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:6:"status";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:6:"status";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'prize_tables' => [
                   'create' => 'a:6:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:4:"type";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:4:"type";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:5:"prize";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:5:"prize";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'exchange_codes' => [
                   'create' => 'a:12:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:10:"voucher_id";a:6:{s:4:"type";s:3:"int";s:6:"length";i:10;s:8:"unsigned";b:1;s:4:"name";s:10:"voucher_id";s:4:"form";a:2:{s:4:"type";s:4:"text";s:3:"max";d:4294967295;}s:6:"master";s:3:"int";}s:4:"name";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:4:"name";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:5:"email";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:5:"email";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:5:"phone";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:5:"phone";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:7:"id_card";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:7:"id_card";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:11:"province_id";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:11:"province_id";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:7:"city_id";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:7:"city_id";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:6:"gender";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:6:"gender";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'exchange_fails' => [
                   'create' => 'a:14:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:10:"voucher_id";a:6:{s:4:"type";s:3:"int";s:6:"length";i:10;s:8:"unsigned";b:1;s:4:"name";s:10:"voucher_id";s:4:"form";a:2:{s:4:"type";s:4:"text";s:3:"max";d:4294967295;}s:6:"master";s:3:"int";}s:4:"name";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:4:"name";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:5:"email";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:5:"email";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:5:"phone";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:5:"phone";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:7:"id_card";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:7:"id_card";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:11:"province_id";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:11:"province_id";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:7:"city_id";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:7:"city_id";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:6:"gender";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:6:"gender";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:5:"media";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:5:"media";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:7:"browser";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:7:"browser";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'notifications' => [
                   'create' => 'a:7:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:4:"type";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:4:"type";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:5:"title";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:5:"title";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:11:"description";a:4:{s:4:"type";s:4:"text";s:4:"name";s:11:"description";s:4:"form";a:1:{s:4:"type";s:8:"textarea";}s:6:"master";s:11:"description";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ],
               'email_templates' => [
                   'create' => 'a:9:{i:0;a:0:{}s:2:"id";a:8:{s:4:"type";s:3:"int";s:6:"length";i:11;s:7:"primary";b:1;s:9:"increment";b:1;s:8:"unsigned";b:1;s:4:"name";s:2:"id";s:7:"notnull";b:1;s:6:"master";s:2:"id";}s:4:"type";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:4:"type";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:10:"from_email";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:10:"from_email";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:9:"from_name";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:9:"from_name";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:7:"subject";a:6:{s:4:"type";s:7:"varchar";s:6:"length";i:100;s:7:"notnull";b:1;s:4:"name";s:7:"subject";s:4:"form";a:1:{s:4:"type";s:4:"text";}s:6:"master";s:5:"title";}s:11:"description";a:4:{s:4:"type";s:4:"text";s:4:"name";s:11:"description";s:4:"form";a:1:{s:4:"type";s:8:"textarea";}s:6:"master";s:11:"description";}s:9:"create_on";a:4:{s:4:"type";s:8:"datetime";s:4:"name";s:9:"create_on";s:7:"notnull";b:1;s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}s:11:"last_update";a:3:{s:4:"type";s:8:"datetime";s:4:"name";s:11:"last_update";s:4:"form";a:3:{s:4:"type";s:4:"text";s:5:"class";s:11:"date-picker";s:8:"modifier";s:8:"datetime";}}}'
               ]
           ]
       ];