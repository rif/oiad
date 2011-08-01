<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-02 00:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scrapping was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-08-02 00:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scrapping was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-08-02 00:36:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:36:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 00:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 00:40:56 --- ERROR: ErrorException [ 1 ]: Class 'SideOfPeachesScrapper' not found ~ APPPATH/classes/factory/#SideOfPeachesScrapper.php# [ 6 ]
2011-08-02 00:40:56 --- STRACE: ErrorException [ 1 ]: Class 'SideOfPeachesScrapper' not found ~ APPPATH/classes/factory/#SideOfPeachesScrapper.php# [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-02 00:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 00:41:46 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/factory/SideOfPeachesScrapper.php [ 13 ]
2011-08-02 00:41:46 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/factory/SideOfPeachesScrapper.php [ 13 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/SideOfPeachesScrapper.php(13): Kohana_Core::error_handler(2048, 'Creating defaul...', '/home/rif/Docum...', 13, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(21): SideOfPeachesScrapper->scrapp('http://www.asid...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-02 00:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 00:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 00:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 00:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 00:46:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/factory/SideOfPeachesScrapper.php [ 16 ]
2011-08-02 00:46:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/factory/SideOfPeachesScrapper.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-02 00:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 00:47:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/factory/SideOfPeachesScrapper.php [ 12 ]
2011-08-02 00:47:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/factory/SideOfPeachesScrapper.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-02 00:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 00:48:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/factory/SideOfPeachesScrapper.php [ 17 ]
2011-08-02 00:48:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/factory/SideOfPeachesScrapper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-02 00:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 00:48:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/factory/SideOfPeachesScrapper.php [ 17 ]
2011-08-02 00:48:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/factory/SideOfPeachesScrapper.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-02 00:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 00:48:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:48:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 00:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 00:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}