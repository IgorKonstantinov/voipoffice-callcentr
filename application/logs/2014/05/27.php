<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-27 10:30:37 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php:67
2014-05-27 10:30:37 --- DEBUG: #0 /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 /data/var/www/CallCenter.dev/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php:67
2014-05-27 10:30:38 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php:67
2014-05-27 10:30:38 --- DEBUG: #0 /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 /data/var/www/CallCenter.dev/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php:67
2014-05-27 10:56:40 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in /data/var/www/CallCenter.dev/application/classes/Controller/Welcome.php:7
2014-05-27 10:56:40 --- DEBUG: #0 /data/var/www/CallCenter.dev/application/classes/Controller/Welcome.php(7): Kohana_Auth->hash('123')
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#7 {main} in /data/var/www/CallCenter.dev/application/classes/Controller/Welcome.php:7
2014-05-27 10:58:41 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php:67
2014-05-27 10:58:41 --- DEBUG: #0 /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /data/var/www/CallCenter.dev/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php:67
2014-05-27 11:06:07 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php:67
2014-05-27 11:06:07 --- DEBUG: #0 /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /data/var/www/CallCenter.dev/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php:67
2014-05-27 11:06:40 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php:67
2014-05-27 11:06:40 --- DEBUG: #0 /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /data/var/www/CallCenter.dev/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /data/var/www/CallCenter.dev/system/classes/Kohana/Cookie.php:67
2014-05-27 11:08:17 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in /data/var/www/CallCenter.dev/application/classes/Controller/Welcome.php:7
2014-05-27 11:08:17 --- DEBUG: #0 /data/var/www/CallCenter.dev/application/classes/Controller/Welcome.php(7): Kohana_Auth->hash('123')
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#7 {main} in /data/var/www/CallCenter.dev/application/classes/Controller/Welcome.php:7
2014-05-27 11:09:29 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in /data/var/www/CallCenter.dev/application/classes/Controller/Welcome.php:7
2014-05-27 11:09:29 --- DEBUG: #0 /data/var/www/CallCenter.dev/application/classes/Controller/Welcome.php(7): Kohana_Auth->hash('123')
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#7 {main} in /data/var/www/CallCenter.dev/application/classes/Controller/Welcome.php:7
2014-05-27 11:10:58 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in /data/var/www/CallCenter.dev/application/classes/Controller/Welcome.php:7
2014-05-27 11:10:58 --- DEBUG: #0 /data/var/www/CallCenter.dev/application/classes/Controller/Welcome.php(7): Kohana_Auth->hash('123')
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#7 {main} in /data/var/www/CallCenter.dev/application/classes/Controller/Welcome.php:7
2014-05-27 11:59:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Main.php [ 14 ] in file:line
2014-05-27 11:59:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-27 12:13:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Main.php [ 15 ] in file:line
2014-05-27 12:13:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-27 12:42:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Main' not found ~ APPPATH/classes/Controller/Welcome.php [ 3 ] in file:line
2014-05-27 12:42:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-27 12:43:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /data/var/www/CallCenter.dev/system/classes/Kohana/View.php:137
2014-05-27 12:43:00 --- DEBUG: #0 /data/var/www/CallCenter.dev/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /data/var/www/CallCenter.dev/application/classes/Controller/Main.php(19): Kohana_Controller_Template->before()
#4 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#10 {main} in /data/var/www/CallCenter.dev/system/classes/Kohana/View.php:137
2014-05-27 12:43:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view templaes/basic could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /data/var/www/CallCenter.dev/system/classes/Kohana/View.php:137
2014-05-27 12:43:49 --- DEBUG: #0 /data/var/www/CallCenter.dev/system/classes/Kohana/View.php(137): Kohana_View->set_filename('templaes/basic')
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/View.php(30): Kohana_View->__construct('templaes/basic', NULL)
#2 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('templaes/basic')
#3 /data/var/www/CallCenter.dev/application/classes/Controller/Main.php(19): Kohana_Controller_Template->before()
#4 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#10 {main} in /data/var/www/CallCenter.dev/system/classes/Kohana/View.php:137
2014-05-27 12:50:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Auth::$template ~ APPPATH/classes/Controller/Auth.php [ 11 ] in /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php:11
2014-05-27 12:50:41 --- DEBUG: #0 /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', '/data/var/www/C...', 11, Array)
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(69): Controller_Auth->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#7 {main} in /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php:11
2014-05-27 12:51:16 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Auth.php [ 33 ] in /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php:33
2014-05-27 12:51:16 --- DEBUG: #0 /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php(33): Kohana_Core::error_handler(2, 'Attempt to assi...', '/data/var/www/C...', 33, Array)
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#7 {main} in /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php:33
2014-05-27 12:52:06 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Auth.php [ 32 ] in /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php:32
2014-05-27 12:52:06 --- DEBUG: #0 /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php(32): Kohana_Core::error_handler(2, 'Attempt to assi...', '/data/var/www/C...', 32, Array)
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#7 {main} in /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php:32
2014-05-27 12:52:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/auth_template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /data/var/www/CallCenter.dev/system/classes/Kohana/View.php:137
2014-05-27 12:52:50 --- DEBUG: #0 /data/var/www/CallCenter.dev/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/auth_t...')
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/auth_t...', NULL)
#2 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template/auth_t...')
#3 /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php(12): Kohana_Controller_Template->before()
#4 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(69): Controller_Auth->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#10 {main} in /data/var/www/CallCenter.dev/system/classes/Kohana/View.php:137
2014-05-27 12:57:27 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Auth.php [ 25 ] in /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php:25
2014-05-27 12:57:27 --- DEBUG: #0 /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', '/data/var/www/C...', 25, Array)
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#7 {main} in /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php:25
2014-05-27 12:59:48 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Auth.php [ 25 ] in /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php:25
2014-05-27 12:59:48 --- DEBUG: #0 /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', '/data/var/www/C...', 25, Array)
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#7 {main} in /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php:25
2014-05-27 13:02:58 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Auth.php [ 30 ] in /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php:30
2014-05-27 13:02:58 --- DEBUG: #0 /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php(30): Kohana_Core::error_handler(2, 'Attempt to assi...', '/data/var/www/C...', 30, Array)
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#7 {main} in /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php:30
2014-05-27 13:05:05 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'www-data'@'localhost' (using password: NO) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /data/var/www/CallCenter.dev/modules/database/classes/Kohana/Database/MySQL.php:171
2014-05-27 13:05:05 --- DEBUG: #0 /data/var/www/CallCenter.dev/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /data/var/www/CallCenter.dev/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /data/var/www/CallCenter.dev/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /data/var/www/CallCenter.dev/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /data/var/www/CallCenter.dev/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /data/var/www/CallCenter.dev/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /data/var/www/CallCenter.dev/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /data/var/www/CallCenter.dev/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#8 /data/var/www/CallCenter.dev/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('Vasea', '123', false)
#9 /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php(23): Kohana_Auth->login('Vasea', '123')
#10 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#13 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#16 {main} in /data/var/www/CallCenter.dev/modules/database/classes/Kohana/Database/MySQL.php:171
2014-05-27 13:06:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-05-27 13:06:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-27 13:08:06 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Unknown MySQL server host 'db' (1) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /data/var/www/CallCenter.dev/modules/database/classes/Kohana/Database/MySQL.php:171
2014-05-27 13:08:06 --- DEBUG: #0 /data/var/www/CallCenter.dev/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /data/var/www/CallCenter.dev/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /data/var/www/CallCenter.dev/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /data/var/www/CallCenter.dev/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /data/var/www/CallCenter.dev/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /data/var/www/CallCenter.dev/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /data/var/www/CallCenter.dev/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /data/var/www/CallCenter.dev/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#8 /data/var/www/CallCenter.dev/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('Vasea', '123', false)
#9 /data/var/www/CallCenter.dev/application/classes/Controller/Auth.php(23): Kohana_Auth->login('Vasea', '123')
#10 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#13 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#16 {main} in /data/var/www/CallCenter.dev/modules/database/classes/Kohana/Database/MySQL.php:171
2014-05-27 13:08:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view templates could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /data/var/www/CallCenter.dev/system/classes/Kohana/View.php:137
2014-05-27 13:08:39 --- DEBUG: #0 /data/var/www/CallCenter.dev/system/classes/Kohana/View.php(137): Kohana_View->set_filename('templates')
#1 /data/var/www/CallCenter.dev/system/classes/Kohana/View.php(30): Kohana_View->__construct('templates', NULL)
#2 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('templates')
#3 /data/var/www/CallCenter.dev/application/classes/Controller/Main.php(18): Kohana_Controller_Template->before()
#4 /data/var/www/CallCenter.dev/application/classes/Controller/Pages.php(11): Controller_Main->before()
#5 /data/var/www/CallCenter.dev/system/classes/Kohana/Controller.php(69): Controller_Pages->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#8 /data/var/www/CallCenter.dev/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /data/var/www/CallCenter.dev/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /data/var/www/CallCenter.dev/index.php(118): Kohana_Request->execute()
#11 {main} in /data/var/www/CallCenter.dev/system/classes/Kohana/View.php:137