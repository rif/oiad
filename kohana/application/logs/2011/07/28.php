<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-07-28 15:19:00 --- ERROR: ErrorException [ 4096 ]: Object of class DummyScrapper could not be converted to string ~ APPPATH/classes/controller/scrapper.php [ 17 ]
2011-07-28 15:19:00 --- STRACE: ErrorException [ 4096 ]: Object of class DummyScrapper could not be converted to string ~ APPPATH/classes/controller/scrapper.php [ 17 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(17): Kohana_Core::error_handler(4096, 'Object of class...', '/home/rif/Docum...', 17, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:19:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: links ~ APPPATH/views/show.php [ 29 ]
2011-07-28 15:19:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: links ~ APPPATH/views/show.php [ 29 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/views/show.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 29, Array)
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/view.php(61): include('/home/rif/Docum...')
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/rif/Docum...', Array)
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Scrapper))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2011-07-28 15:28:13 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:28:13 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 19, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:28:31 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:28:31 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 19, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:29:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:29:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:29:35 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:29:35 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 19, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:29:41 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:29:41 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 19, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:29:43 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:29:43 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 19, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:29:52 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:29:52 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 19, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:30:52 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:30:52 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 19, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:31:02 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:31:02 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 19, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:31:04 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:31:04 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 19, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:31:04 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:31:04 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 19, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:31:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:31:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:31:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:31:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:31:40 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:31:40 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 19, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:31:41 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:31:41 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 19, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:31:42 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:31:42 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 19, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:31:55 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 15:31:55 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 19, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:32:08 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:32:08 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:32:18 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:32:18 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:32:46 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:32:46 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:32:47 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:32:47 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:32:51 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:32:51 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:32:52 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:32:52 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:33:07 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:33:07 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:34:12 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:34:12 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:34:13 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:34:13 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:34:14 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:34:14 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:34:39 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:34:39 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:34:40 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:34:40 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:35:05 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:35:05 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:35:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:35:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:35:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:35:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:35:10 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:35:10 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:35:10 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:35:10 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:35:10 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:35:10 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:35:11 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:35:11 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:35:11 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:35:11 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:35:32 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:35:32 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:38:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:38:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:38:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 15:38:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:52:57 --- ERROR: ErrorException [ 1 ]: Class 'PolyFactory' not found ~ APPPATH/classes/factory/HatDayScrapper.php [ 3 ]
2011-07-28 15:52:57 --- STRACE: ErrorException [ 1 ]: Class 'PolyFactory' not found ~ APPPATH/classes/factory/HatDayScrapper.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:54:41 --- ERROR: ErrorException [ 1 ]: Cannot use object of type HatDayScrapper as array ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
2011-07-28 15:54:41 --- STRACE: ErrorException [ 1 ]: Cannot use object of type HatDayScrapper as array ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:55:05 --- ERROR: ErrorException [ 1 ]: Cannot use object of type HatDayScrapper as array ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
2011-07-28 15:55:05 --- STRACE: ErrorException [ 1 ]: Cannot use object of type HatDayScrapper as array ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:55:06 --- ERROR: ErrorException [ 1 ]: Cannot use object of type HatDayScrapper as array ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
2011-07-28 15:55:06 --- STRACE: ErrorException [ 1 ]: Cannot use object of type HatDayScrapper as array ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:55:08 --- ERROR: ErrorException [ 1 ]: Cannot use object of type HatDayScrapper as array ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
2011-07-28 15:55:08 --- STRACE: ErrorException [ 1 ]: Cannot use object of type HatDayScrapper as array ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:55:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
2011-07-28 15:55:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 10, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/factory/HatDayScrapper.php(5): PolyFactory::addScrapper('www.hataday.com', Object(HatDayScrapper))
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(5): require_once('/home/rif/Docum...')
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/core.php(496): require('/home/rif/Docum...')
#4 [internal function]: Kohana_Core::auto_load('controller_scra...')
#5 [internal function]: spl_autoload_call('controller_scra...')
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(85): class_exists('controller_scra...')
#7 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#10 {main}
2011-07-28 15:55:41 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
2011-07-28 15:55:41 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:55:43 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
2011-07-28 15:55:43 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:55:48 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/scrapper.php [ 12 ]
2011-07-28 15:55:48 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/scrapper.php [ 12 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(12): Kohana_Core::error_handler(2048, 'Creating defaul...', '/home/rif/Docum...', 12, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 15:56:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 15:56:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 15:56:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 15:56:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 15:56:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 15:56:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 15:56:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 15:56:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 15:56:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 15:56:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 15:56:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 15:56:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 15:57:24 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
2011-07-28 15:57:24 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:57:26 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
2011-07-28 15:57:26 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:57:53 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
2011-07-28 15:57:53 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:58:38 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
2011-07-28 15:58:38 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:59:04 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
2011-07-28 15:59:04 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:59:18 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
2011-07-28 15:59:18 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 15:59:28 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
2011-07-28 15:59:28 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:00:18 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:18 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:00:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:00:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:00:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:00:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:00:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:00:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:00:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:00:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:00:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:00:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:00:35 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:35 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:00:36 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:36 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:00:36 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:36 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:00:36 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:36 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:00:36 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:36 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:00:37 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:37 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:00:37 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:37 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:00:37 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:37 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:00:42 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:42 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:00:46 --- ERROR: ErrorException [ 1 ]: Class 'this' not found ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:46 --- STRACE: ErrorException [ 1 ]: Class 'this' not found ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:00:56 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:00:56 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:01:40 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:01:40 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: PolyFactory::$scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:01:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:01:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:01:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
2011-07-28 16:01:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: scrappers ~ APPPATH/classes/factory/PolyFactory.php [ 14 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/PolyFactory.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 14, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(18): PolyFactory::getScrapper('http://www.hata...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:02:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 16:02:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:02:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 16:02:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:04:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/factory/PolyFactory.php [ 22 ]
2011-07-28 16:04:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/factory/PolyFactory.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:04:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/factory/PolyFactory.php [ 22 ]
2011-07-28 16:04:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_VARIABLE ~ APPPATH/classes/factory/PolyFactory.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:50:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH/classes/controller/scrapper.php [ 18 ]
2011-07-28 16:50:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH/classes/controller/scrapper.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:50:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/classes/controller/scrapper.php [ 19 ]
2011-07-28 16:50:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/classes/controller/scrapper.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:51:23 --- ERROR: ErrorException [ 4096 ]: Object of class HatDayScrapper could not be converted to string ~ APPPATH/classes/controller/scrapper.php [ 20 ]
2011-07-28 16:51:23 --- STRACE: ErrorException [ 4096 ]: Object of class HatDayScrapper could not be converted to string ~ APPPATH/classes/controller/scrapper.php [ 20 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(20): Kohana_Core::error_handler(4096, 'Object of class...', '/home/rif/Docum...', 20, Array)
#1 [internal function]: Controller_Scrapper->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-28 16:51:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method HatDayScrapper::scrapp() ~ APPPATH/classes/controller/scrapper.php [ 22 ]
2011-07-28 16:51:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method HatDayScrapper::scrapp() ~ APPPATH/classes/controller/scrapper.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:52:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: link ~ APPPATH/classes/factory/HatDayScrapper.php [ 13 ]
2011-07-28 16:52:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: link ~ APPPATH/classes/factory/HatDayScrapper.php [ 13 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/HatDayScrapper.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 13, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(22): HatDayScrapper->scrapp()
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:52:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: link ~ APPPATH/classes/factory/HatDayScrapper.php [ 12 ]
2011-07-28 16:52:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: link ~ APPPATH/classes/factory/HatDayScrapper.php [ 12 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/HatDayScrapper.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 12, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(22): HatDayScrapper->scrapp()
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:52:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: link ~ APPPATH/classes/factory/HatDayScrapper.php [ 12 ]
2011-07-28 16:52:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: link ~ APPPATH/classes/factory/HatDayScrapper.php [ 12 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/HatDayScrapper.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 12, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(22): HatDayScrapper->scrapp()
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-07-28 16:52:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/factory/HatDayScrapper.php [ 12 ]
2011-07-28 16:52:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/factory/HatDayScrapper.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:52:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/factory/HatDayScrapper.php [ 12 ]
2011-07-28 16:52:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/factory/HatDayScrapper.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:52:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/factory/HatDayScrapper.php [ 12 ]
2011-07-28 16:52:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/factory/HatDayScrapper.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:53:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/factory/HatDayScrapper.php [ 12 ]
2011-07-28 16:53:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/factory/HatDayScrapper.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-07-28 16:53:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: link ~ APPPATH/classes/factory/HatDayScrapper.php [ 12 ]
2011-07-28 16:53:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: link ~ APPPATH/classes/factory/HatDayScrapper.php [ 12 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/HatDayScrapper.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 12, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(22): HatDayScrapper->scrapp()
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}