<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-07-27 15:08:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-07-27 15:08:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 15:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-27 15:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hello.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-27 15:08:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-07-27 15:08:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_Member' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 15:13:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_Links' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-07-27 15:13:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_Links' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 15:13:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/config/database.php [ 3 ]
2011-07-27 15:13:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/config/database.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 15:15:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/config/database.php [ 6 ]
2011-07-27 15:15:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/config/database.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 15:15:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/config/database.php [ 3 ]
2011-07-27 15:15:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/config/database.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 15:16:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/config/database.php [ 20 ]
2011-07-27 15:16:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/config/database.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 15:16:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/config/database.php [ 19 ]
2011-07-27 15:16:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/config/database.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 15:17:09 --- ERROR: Database_Exception [ 1146 ]: Table 'oiad.linkses' doesn't exist [ SHOW FULL COLUMNS FROM `linkses` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-07-27 15:17:09 --- STRACE: Database_Exception [ 1146 ]: Table 'oiad.linkses' doesn't exist [ SHOW FULL COLUMNS FROM `linkses` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/rif/Documents/webframeworks/kohana/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/rif/Documents/webframeworks/kohana/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('linkses')
#2 /home/rif/Documents/webframeworks/kohana/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /home/rif/Documents/webframeworks/kohana/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /home/rif/Documents/webframeworks/kohana/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /home/rif/Documents/webframeworks/kohana/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /home/rif/Documents/webframeworks/kohana/application/classes/controller/hello.php(8): Kohana_ORM::factory('links')
#7 [internal function]: Controller_Hello->action_index()
#8 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#9 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#12 {main}
2011-07-27 15:21:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Links' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-07-27 15:21:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Links' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 15:21:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_Link' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-07-27 15:21:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_Link' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 15:21:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_Link' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-07-27 15:21:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_Link' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 15:34:19 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Link as array ~ APPPATH/views/site.php [ 14 ]
2011-07-27 15:34:19 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Link as array ~ APPPATH/views/site.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 15:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL initialize_links was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-07-27 15:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL initialize_links was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-27 15:48:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL initialize_links was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-07-27 15:48:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL initialize_links was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-27 15:50:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH/classes/controller/initlinks.php [ 126 ]
2011-07-27 15:50:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH/classes/controller/initlinks.php [ 126 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 15:57:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/initlinks.php [ 128 ]
2011-07-27 15:57:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/initlinks.php [ 128 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 15:57:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: rss_link ~ APPPATH/classes/controller/initlinks.php [ 123 ]
2011-07-27 15:57:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: rss_link ~ APPPATH/classes/controller/initlinks.php [ 123 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/initlinks.php(123): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 123, Array)
#1 [internal function]: Controller_Initlinks->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Initlinks))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-27 16:05:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '>', expecting ')' ~ APPPATH/classes/controller/initlinks.php [ 122 ]
2011-07-27 16:05:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '>', expecting ')' ~ APPPATH/classes/controller/initlinks.php [ 122 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 16:53:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL check_rss was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-07-27 16:53:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL check_rss was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-27 16:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL check_rss was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-07-27 16:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL check_rss was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-27 16:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL check_rss was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-07-27 16:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL check_rss was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-27 16:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL check_rss was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-07-27 16:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL check_rss was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-27 17:03:13 --- ERROR: ErrorException [ 1 ]: Call to undefined function count_all() ~ APPPATH/classes/controller/checkrss.php [ 11 ]
2011-07-27 17:03:13 --- STRACE: ErrorException [ 1 ]: Call to undefined function count_all() ~ APPPATH/classes/controller/checkrss.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 17:04:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Link::count() ~ APPPATH/classes/controller/checkrss.php [ 10 ]
2011-07-27 17:04:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Link::count() ~ APPPATH/classes/controller/checkrss.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 17:05:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Link::count() ~ APPPATH/classes/controller/checkrss.php [ 10 ]
2011-07-27 17:05:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Link::count() ~ APPPATH/classes/controller/checkrss.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 17:15:57 --- ERROR: ErrorException [ 1 ]: Class 'SimplePie' not found ~ APPPATH/classes/controller/checkrss.php [ 17 ]
2011-07-27 17:15:57 --- STRACE: ErrorException [ 1 ]: Class 'SimplePie' not found ~ APPPATH/classes/controller/checkrss.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 17:16:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/checkrss.php [ 17 ]
2011-07-27 17:16:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/checkrss.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 17:16:55 --- ERROR: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/classes/controller/simplepie/SimplePie/Core.php [ 1711 ]
2011-07-27 17:16:55 --- STRACE: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/classes/controller/simplepie/SimplePie/Core.php [ 1711 ]
--
#0 [internal function]: Kohana_Core::error_handler(512, './cache is not ...', '/home/rif/Docum...', 1711, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/simplepie/SimplePie/Core.php(1711): trigger_error('./cache is not ...', 512)
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(18): SimplePie_Core->init()
#3 [internal function]: Controller_Checkrss->action_index()
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-07-27 17:17:20 --- ERROR: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/classes/controller/simplepie/SimplePie/Core.php [ 1711 ]
2011-07-27 17:17:20 --- STRACE: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/classes/controller/simplepie/SimplePie/Core.php [ 1711 ]
--
#0 [internal function]: Kohana_Core::error_handler(512, './cache is not ...', '/home/rif/Docum...', 1711, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/simplepie/SimplePie/Core.php(1711): trigger_error('./cache is not ...', 512)
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(18): SimplePie_Core->init()
#3 [internal function]: Controller_Checkrss->action_index()
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-07-27 17:19:46 --- ERROR: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/vendor/simplepie/SimplePie/Core.php [ 1711 ]
2011-07-27 17:19:46 --- STRACE: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/vendor/simplepie/SimplePie/Core.php [ 1711 ]
--
#0 [internal function]: Kohana_Core::error_handler(512, './cache is not ...', '/home/rif/Docum...', 1711, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/vendor/simplepie/SimplePie/Core.php(1711): trigger_error('./cache is not ...', 512)
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(18): SimplePie_Core->init()
#3 [internal function]: Controller_Checkrss->action_index()
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-07-27 17:20:42 --- ERROR: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/vendor/simplepie/SimplePie/Core.php [ 1711 ]
2011-07-27 17:20:42 --- STRACE: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/vendor/simplepie/SimplePie/Core.php [ 1711 ]
--
#0 [internal function]: Kohana_Core::error_handler(512, './cache is not ...', '/home/rif/Docum...', 1711, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/vendor/simplepie/SimplePie/Core.php(1711): trigger_error('./cache is not ...', 512)
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(18): SimplePie_Core->init()
#3 [internal function]: Controller_Checkrss->action_index()
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-07-27 17:20:46 --- ERROR: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/vendor/simplepie/SimplePie/Core.php [ 1711 ]
2011-07-27 17:20:46 --- STRACE: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/vendor/simplepie/SimplePie/Core.php [ 1711 ]
--
#0 [internal function]: Kohana_Core::error_handler(512, './cache is not ...', '/home/rif/Docum...', 1711, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/vendor/simplepie/SimplePie/Core.php(1711): trigger_error('./cache is not ...', 512)
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(18): SimplePie_Core->init()
#3 [internal function]: Controller_Checkrss->action_index()
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-07-27 17:21:19 --- ERROR: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/vendor/simplepie/SimplePie/Core.php [ 1711 ]
2011-07-27 17:21:19 --- STRACE: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/vendor/simplepie/SimplePie/Core.php [ 1711 ]
--
#0 [internal function]: Kohana_Core::error_handler(512, './cache is not ...', '/home/rif/Docum...', 1711, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/vendor/simplepie/SimplePie/Core.php(1711): trigger_error('./cache is not ...', 512)
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(18): SimplePie_Core->init()
#3 [internal function]: Controller_Checkrss->action_index()
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-07-27 17:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php_ ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-27 17:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php_ ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-27 17:22:07 --- ERROR: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/vendor/simplepie/SimplePie/Core.php [ 1711 ]
2011-07-27 17:22:07 --- STRACE: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/vendor/simplepie/SimplePie/Core.php [ 1711 ]
--
#0 [internal function]: Kohana_Core::error_handler(512, './cache is not ...', '/home/rif/Docum...', 1711, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/vendor/simplepie/SimplePie/Core.php(1711): trigger_error('./cache is not ...', 512)
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(18): SimplePie_Core->init()
#3 [internal function]: Controller_Checkrss->action_index()
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-07-27 17:29:51 --- ERROR: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/vendor/simplepie/SimplePie/Core.php [ 1711 ]
2011-07-27 17:29:51 --- STRACE: ErrorException [ 512 ]: ./cache is not writeable. Make sure you've set the correct relative or absolute path, and that the location is server-writable. ~ APPPATH/vendor/simplepie/SimplePie/Core.php [ 1711 ]
--
#0 [internal function]: Kohana_Core::error_handler(512, './cache is not ...', '/home/rif/Docum...', 1711, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/vendor/simplepie/SimplePie/Core.php(1711): trigger_error('./cache is not ...', 512)
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(18): SimplePie_Core->init()
#3 [internal function]: Controller_Checkrss->action_index()
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-07-27 17:37:31 --- ERROR: ErrorException [ 1 ]: Call to a member function get_date() on a non-object ~ APPPATH/classes/controller/checkrss.php [ 24 ]
2011-07-27 17:37:31 --- STRACE: ErrorException [ 1 ]: Call to a member function get_date() on a non-object ~ APPPATH/classes/controller/checkrss.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 17:38:31 --- ERROR: ErrorException [ 8 ]: Undefined index: date ~ APPPATH/classes/controller/checkrss.php [ 23 ]
2011-07-27 17:38:31 --- STRACE: ErrorException [ 8 ]: Undefined index: date ~ APPPATH/classes/controller/checkrss.php [ 23 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(23): Kohana_Core::error_handler(8, 'Undefined index...', '/home/rif/Docum...', 23, Array)
#1 [internal function]: Controller_Checkrss->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-27 17:39:02 --- ERROR: ErrorException [ 1 ]: Call to a member function keys() on a non-object ~ APPPATH/classes/controller/checkrss.php [ 23 ]
2011-07-27 17:39:02 --- STRACE: ErrorException [ 1 ]: Call to a member function keys() on a non-object ~ APPPATH/classes/controller/checkrss.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 17:39:13 --- ERROR: ErrorException [ 1 ]: Call to a member function keys() on a non-object ~ APPPATH/classes/controller/checkrss.php [ 23 ]
2011-07-27 17:39:13 --- STRACE: ErrorException [ 1 ]: Call to a member function keys() on a non-object ~ APPPATH/classes/controller/checkrss.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 17:39:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: found ~ APPPATH/classes/controller/checkrss.php [ 33 ]
2011-07-27 17:39:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: found ~ APPPATH/classes/controller/checkrss.php [ 33 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 33, Array)
#1 [internal function]: Controller_Checkrss->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-27 17:40:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: found ~ APPPATH/classes/controller/checkrss.php [ 33 ]
2011-07-27 17:40:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: found ~ APPPATH/classes/controller/checkrss.php [ 33 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 33, Array)
#1 [internal function]: Controller_Checkrss->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-27 17:40:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: found ~ APPPATH/classes/controller/checkrss.php [ 35 ]
2011-07-27 17:40:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: found ~ APPPATH/classes/controller/checkrss.php [ 35 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 35, Array)
#1 [internal function]: Controller_Checkrss->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-27 17:43:12 --- ERROR: ErrorException [ 8 ]: Undefined index: Date ~ APPPATH/classes/controller/checkrss.php [ 26 ]
2011-07-27 17:43:12 --- STRACE: ErrorException [ 8 ]: Undefined index: Date ~ APPPATH/classes/controller/checkrss.php [ 26 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/home/rif/Docum...', 26, Array)
#1 [internal function]: Controller_Checkrss->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-27 17:44:07 --- ERROR: ErrorException [ 8 ]: Undefined index: Date ~ APPPATH/classes/controller/checkrss.php [ 26 ]
2011-07-27 17:44:07 --- STRACE: ErrorException [ 8 ]: Undefined index: Date ~ APPPATH/classes/controller/checkrss.php [ 26 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/home/rif/Docum...', 26, Array)
#1 [internal function]: Controller_Checkrss->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-27 17:51:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/checkrss.php [ 19 ]
2011-07-27 17:51:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/checkrss.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 17:56:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/checkrss.php [ 39 ]
2011-07-27 17:56:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/checkrss.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 17:56:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Link::ehere() ~ APPPATH/classes/controller/checkrss.php [ 9 ]
2011-07-27 17:56:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Link::ehere() ~ APPPATH/classes/controller/checkrss.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 17:59:24 --- ERROR: ErrorException [ 8 ]: Undefined index: pubDate ~ APPPATH/classes/controller/checkrss.php [ 26 ]
2011-07-27 17:59:24 --- STRACE: ErrorException [ 8 ]: Undefined index: pubDate ~ APPPATH/classes/controller/checkrss.php [ 26 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/checkrss.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/home/rif/Docum...', 26, Array)
#1 [internal function]: Controller_Checkrss->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Checkrss))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-27 19:13:58 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ‘OIAD’ - assumed '‘OIAD’' ~ APPPATH/classes/controller/showlinks.php [ 8 ]
2011-07-27 19:13:58 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ‘OIAD’ - assumed '‘OIAD’' ~ APPPATH/classes/controller/showlinks.php [ 8 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/showlinks.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/rif/Docum...', 8, Array)
#1 [internal function]: Controller_Showlinks->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Showlinks))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-27 19:21:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: address ~ APPPATH/views/check_rss.php [ 15 ]
2011-07-27 19:21:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: address ~ APPPATH/views/check_rss.php [ 15 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/views/check_rss.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 15, Array)
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/view.php(61): include('/home/rif/Docum...')
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/rif/Docum...', Array)
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Checkrss))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2011-07-27 19:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL addlink was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-07-27 19:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL addlink was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-27 20:02:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/add_link.php [ 12 ]
2011-07-27 20:02:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/add_link.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 20:21:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/controller/showlinks.php [ 25 ]
2011-07-27 20:21:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/controller/showlinks.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 20:22:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/controller/showlinks.php [ 25 ]
2011-07-27 20:22:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/controller/showlinks.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 20:23:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/show.php [ 18 ]
2011-07-27 20:23:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/show.php [ 18 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/views/show.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 18, Array)
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/view.php(61): include('/home/rif/Docum...')
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/rif/Docum...', Array)
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Showlinks))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2011-07-27 20:24:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Link::check_edit() ~ APPPATH/classes/controller/showlinks.php [ 13 ]
2011-07-27 20:24:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Link::check_edit() ~ APPPATH/classes/controller/showlinks.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-27 20:26:03 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2011-07-27 20:26:03 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/showlinks.php(13): Kohana_ORM->check()
#1 [internal function]: Controller_Showlinks->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Showlinks))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-27 20:26:46 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2011-07-27 20:26:46 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /home/rif/Documents/webframeworks/kohana/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#1 /home/rif/Documents/webframeworks/kohana/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/showlinks.php(14): Kohana_ORM->save()
#3 [internal function]: Controller_Showlinks->action_index()
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Showlinks))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#8 {main}