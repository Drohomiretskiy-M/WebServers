<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-02 12:32:15 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:145
2015-03-02 12:32:15 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:145