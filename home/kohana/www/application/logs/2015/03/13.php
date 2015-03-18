<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-13 11:36:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: contenth ~ APPPATH\views\main.php [ 12 ] in Z:\home\kohana\www\application\views\main.php:12
2015-03-13 11:36:19 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 12, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:12
2015-03-13 11:38:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: contenth ~ APPPATH\views\main.php [ 12 ] in Z:\home\kohana\www\application\views\main.php:12
2015-03-13 11:38:50 --- DEBUG: #0 Z:\home\kohana\www\application\views\main.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 12, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(62): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\main.php:12
2015-03-13 12:23:02 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:145
2015-03-13 12:23:02 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('main')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:145
2015-03-13 12:23:28 --- CRITICAL: View_Exception [ 0 ]: The requested view main could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:145
2015-03-13 12:23:28 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('main')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('main', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('main')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:145