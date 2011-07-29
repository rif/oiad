<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-07-29 13:12:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: pars ~ APPPATH/classes/controller/initlinks.php [ 135 ]
2011-07-29 13:12:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: pars ~ APPPATH/classes/controller/initlinks.php [ 135 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/initlinks.php(135): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 135, Array)
#1 [internal function]: Controller_Initlinks->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Initlinks))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-29 14:12:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:12:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:13:02 --- ERROR: Kohana_Exception [ 0 ]: The address property does not exist in the Model_Link class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-07-29 14:13:02 --- STRACE: Kohana_Exception [ 0 ]: The address property does not exist in the Model_Link class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/views/show.php(33): Kohana_ORM->__get('address')
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/view.php(61): include('/home/rif/Docum...')
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/rif/Docum...', Array)
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Showlinks))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2011-07-29 14:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:13:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:13:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:14:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:14:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-07-29 14:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-29 14:16:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:16:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:22:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:27:21 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2011-07-29 14:27:21 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/showlinks.php(15): Kohana_ORM->check()
#1 [internal function]: Controller_Showlinks->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Showlinks))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-29 14:27:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:27:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:32:06 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/kohana/validation.php [ 228 ]
2011-07-29 14:32:06 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/kohana/validation.php [ 228 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/validation.php(228): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/rif/Docum...', 228, Array)
#1 /home/rif/Documents/webframeworks/kohana/modules/orm/classes/kohana/orm.php(358): Kohana_Validation->rules('address', Array)
#2 /home/rif/Documents/webframeworks/kohana/modules/orm/classes/kohana/orm.php(1168): Kohana_ORM->_validation()
#3 /home/rif/Documents/webframeworks/kohana/application/classes/controller/showlinks.php(15): Kohana_ORM->check()
#4 [internal function]: Controller_Showlinks->action_index()
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Showlinks))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2011-07-29 14:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:32:26 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/kohana/validation.php [ 228 ]
2011-07-29 14:32:26 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/kohana/validation.php [ 228 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/validation.php(228): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/rif/Docum...', 228, Array)
#1 /home/rif/Documents/webframeworks/kohana/modules/orm/classes/kohana/orm.php(358): Kohana_Validation->rules('rss', Array)
#2 /home/rif/Documents/webframeworks/kohana/modules/orm/classes/kohana/orm.php(1168): Kohana_ORM->_validation()
#3 /home/rif/Documents/webframeworks/kohana/application/classes/controller/showlinks.php(15): Kohana_ORM->check()
#4 [internal function]: Controller_Showlinks->action_index()
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Showlinks))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2011-07-29 14:32:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:32:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:32:29 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/kohana/validation.php [ 228 ]
2011-07-29 14:32:29 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/kohana/validation.php [ 228 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/validation.php(228): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/rif/Docum...', 228, Array)
#1 /home/rif/Documents/webframeworks/kohana/modules/orm/classes/kohana/orm.php(358): Kohana_Validation->rules('rss', Array)
#2 /home/rif/Documents/webframeworks/kohana/modules/orm/classes/kohana/orm.php(1168): Kohana_ORM->_validation()
#3 /home/rif/Documents/webframeworks/kohana/application/classes/controller/showlinks.php(15): Kohana_ORM->check()
#4 [internal function]: Controller_Showlinks->action_index()
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Showlinks))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2011-07-29 14:32:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:32:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:34:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:34:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scrapp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-07-29 14:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scrapp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-29 14:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 14:54:04 --- ERROR: Kohana_Exception [ 0 ]: The address property does not exist in the Model_Link class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-07-29 14:54:04 --- STRACE: Kohana_Exception [ 0 ]: The address property does not exist in the Model_Link class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): Kohana_ORM->__get('address')
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-29 14:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 14:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:01:12 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/factory/HeartlandAmericaScrapper.php [ 15 ]
2011-07-29 15:01:12 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/factory/HeartlandAmericaScrapper.php [ 15 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/HeartlandAmericaScrapper.php(15): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/rif/Docum...', 15, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(22): HeartlandAmericaScrapper->scrapp('www.heartlandam...', 'http://www.hear...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-29 15:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:04:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:04:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:08:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:08:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:08:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:08:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:08:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:08:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:18:52 --- ERROR: ErrorException [ 2 ]: date() expects at least 1 parameter, 0 given ~ APPPATH/classes/factory/HatDayScrapper.php [ 29 ]
2011-07-29 15:18:52 --- STRACE: ErrorException [ 2 ]: date() expects at least 1 parameter, 0 given ~ APPPATH/classes/factory/HatDayScrapper.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/home/rif/Docum...', 29, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/factory/HatDayScrapper.php(29): date()
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(22): HatDayScrapper->scrapp('www.hataday.com', 'http://www.hata...')
#3 [internal function]: Controller_Scrapper->action_index()
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-07-29 15:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:31:56 --- ERROR: Kohana_Exception [ 0 ]: The date property does not exist in the Model_Deal class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2011-07-29 15:31:56 --- STRACE: Kohana_Exception [ 0 ]: The date property does not exist in the Model_Deal class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /home/rif/Documents/webframeworks/kohana/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('date', '2011-07-29')
#1 /home/rif/Documents/webframeworks/kohana/application/classes/factory/HatDayScrapper.php(29): Kohana_ORM->__set('date', '2011-07-29')
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): HatDayScrapper->scrapp('www.hataday.com', 'http://www.hata...')
#3 [internal function]: Controller_Scrapper->action_index()
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-07-29 15:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-07-29 15:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-07-29 15:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}