<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-24 05:09:37 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\localhost\www\fotovideohrafy\system\classes\Kohana\Cookie.php:67
2015-02-24 05:09:37 --- DEBUG: #0 Z:\home\localhost\www\fotovideohrafy\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('vc', NULL)
#1 Z:\home\localhost\www\fotovideohrafy\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('vc')
#2 Z:\home\localhost\www\fotovideohrafy\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\localhost\www\fotovideohrafy\system\classes\Kohana\Cookie.php:67
2015-02-24 06:08:48 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\localhost\www\fotovideohrafy\system\classes\Kohana\Cookie.php:67
2015-02-24 06:08:48 --- DEBUG: #0 Z:\home\localhost\www\fotovideohrafy\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('vc', NULL)
#1 Z:\home\localhost\www\fotovideohrafy\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('vc')
#2 Z:\home\localhost\www\fotovideohrafy\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\localhost\www\fotovideohrafy\system\classes\Kohana\Cookie.php:67