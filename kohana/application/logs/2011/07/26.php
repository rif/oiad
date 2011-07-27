<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-07-26 23:01:31 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/hello.php [ 8 ]
2011-07-26 23:01:31 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/hello.php [ 8 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/hello.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/rif/Docum...', 8, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-26 23:02:26 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/hello.php [ 8 ]
2011-07-26 23:02:26 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/hello.php [ 8 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/hello.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/rif/Docum...', 8, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-26 23:02:27 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/hello.php [ 8 ]
2011-07-26 23:02:27 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/hello.php [ 8 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/hello.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/rif/Docum...', 8, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-26 23:02:29 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/hello.php [ 8 ]
2011-07-26 23:02:29 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/hello.php [ 8 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/controller/hello.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/rif/Docum...', 8, Array)
#1 [internal function]: Controller_Hello->action_index()
#2 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Hello))
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#6 {main}
2011-07-26 23:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-07-26 23:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-07-26 23:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-07-26 23:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#3 {main}