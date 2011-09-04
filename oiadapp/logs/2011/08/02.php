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
2011-08-02 00:54:26 --- ERROR: ErrorException [ 2 ]: file_get_contents(http://www.98main.com/): failed to open stream: Redirection limit reached, aborting ~ APPPATH/classes/factory/AbstractScrapper.php [ 10 ]
2011-08-02 00:54:26 --- STRACE: ErrorException [ 2 ]: file_get_contents(http://www.98main.com/): failed to open stream: Redirection limit reached, aborting ~ APPPATH/classes/factory/AbstractScrapper.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/home/rif/Docum...', 10, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/factory/AbstractScrapper.php(10): file_get_contents('http://www.98ma...')
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(21): AbstractScrapper->scrapp('http://www.98ma...')
#3 [internal function]: Controller_Scrapper->action_index()
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-08-02 00:56:20 --- ERROR: ErrorException [ 2 ]: file_get_contents(http://www.98main.com/): failed to open stream: Redirection limit reached, aborting ~ APPPATH/classes/factory/AbstractScrapper.php [ 10 ]
2011-08-02 00:56:20 --- STRACE: ErrorException [ 2 ]: file_get_contents(http://www.98main.com/): failed to open stream: Redirection limit reached, aborting ~ APPPATH/classes/factory/AbstractScrapper.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/home/rif/Docum...', 10, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/factory/AbstractScrapper.php(10): file_get_contents('http://www.98ma...')
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(21): AbstractScrapper->scrapp('http://www.98ma...')
#3 [internal function]: Controller_Scrapper->action_index()
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-08-02 00:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 00:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:05:05 --- ERROR: ErrorException [ 2 ]: file_get_contents(https://www.98main.com/): failed to open stream: Redirection limit reached, aborting ~ APPPATH/classes/factory/AbstractScrapper.php [ 10 ]
2011-08-02 01:05:05 --- STRACE: ErrorException [ 2 ]: file_get_contents(https://www.98main.com/): failed to open stream: Redirection limit reached, aborting ~ APPPATH/classes/factory/AbstractScrapper.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/home/rif/Docum...', 10, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/factory/AbstractScrapper.php(10): file_get_contents('https://www.98m...')
#2 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(21): AbstractScrapper->scrapp('https://www.98m...')
#3 [internal function]: Controller_Scrapper->action_index()
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-08-02 01:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:10:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:10:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:11:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:11:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:11:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:11:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:15:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:15:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:16:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:16:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:17:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:17:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:18:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:18:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jquery-1.4.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jquery-1.4.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/ui/1.8.4/css/custom-theme/jquery-ui-1.8.4.custom.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/ui/1.8.4/css/custom-theme/jquery-ui-1.8.4.custom.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/styles.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/styles.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/ui/1.8.4/js/jquery-ui-1.8.4.custom.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/ui/1.8.4/js/jquery-ui-1.8.4.custom.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/home.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/home.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jPager-1.1.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jPager-1.1.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jmodal/i/jModal.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jmodal/i/jModal.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/counter/jquery.lwtCountdown-0.9.5.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/counter/jquery.lwtCountdown-0.9.5.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/misc.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/misc.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jmodal/jmodal-1.0.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jmodal/jmodal-1.0.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/spacer.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/spacer.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_myspace.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_myspace.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_twitter.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_twitter.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/logo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/logo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_facebook.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_facebook.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_youtube.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_youtube.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_rss.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_rss.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_mail.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_mail.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/lighting/smallpictures/72-LT454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/lighting/smallpictures/72-LT454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/electronics/small/72-SCN01.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/electronics/small/72-SCN01.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/camping/smallpictures/80-9690.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/camping/smallpictures/80-9690.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/lighting/largepictures/72-LT454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/lighting/largepictures/72-LT454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/dollar-NEW.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/dollar-NEW.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/hurryUp.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/hurryUp.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/home/small/80-6300.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/home/small/80-6300.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/signUpButton.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/signUpButton.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/emailFriendButton.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/emailFriendButton.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/catalog-NEW.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/catalog-NEW.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/footerLogo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/footerLogo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/payPalVerified.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/payPalVerified.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/godaddy.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/godaddy.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/payment.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/payment.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/godaddy.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/godaddy.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/payment.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/payment.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:21:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:21:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/ui/1.8.4/css/custom-theme/jquery-ui-1.8.4.custom.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/ui/1.8.4/css/custom-theme/jquery-ui-1.8.4.custom.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/styles.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/styles.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/ui/1.8.4/js/jquery-ui-1.8.4.custom.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/ui/1.8.4/js/jquery-ui-1.8.4.custom.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jmodal/jmodal-1.0.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jmodal/jmodal-1.0.1.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jPager-1.1.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jPager-1.1.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/home.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/home.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jmodal/i/jModal.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jmodal/i/jModal.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/counter/jquery.lwtCountdown-0.9.5.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/counter/jquery.lwtCountdown-0.9.5.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/misc.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/misc.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_facebook.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_facebook.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/spacer.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/spacer.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_twitter.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_twitter.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_youtube.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_youtube.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_rss.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_rss.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_myspace.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_myspace.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_mail.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jquery-1.4.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/logo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Scripts/jquery-1.4.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/logo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_mail.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/lighting/smallpictures/72-LT454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/lighting/smallpictures/72-LT454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/home/small/80-6300.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/home/small/80-6300.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/electronics/small/72-SCN01.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/electronics/small/72-SCN01.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/camping/smallpictures/80-9690.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/camping/smallpictures/80-9690.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/signUpButton.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/signUpButton.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/emailFriendButton.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/emailFriendButton.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/catalog-NEW.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/catalog-NEW.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/hurryUp.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/hurryUp.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/dollar-NEW.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/2.0/images/dollar-NEW.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/lighting/largepictures/72-LT454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: website/lighting/largepictures/72-LT454.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/footerLogo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/footerLogo.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/payPalVerified.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/payPalVerified.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/spacer.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/spacer.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/godaddy.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/godaddy.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/payment.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/payment.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_facebook.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_facebook.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_twitter.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_twitter.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_myspace.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_myspace.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_rss.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_rss.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_youtube.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/icon_youtube.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/godaddy.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/godaddy.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/payment.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Content/images/payment.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:22:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:22:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:31:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: FF ~ APPPATH/classes/factory/AbstractScrapper.php [ 17 ]
2011-08-02 01:31:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: FF ~ APPPATH/classes/factory/AbstractScrapper.php [ 17 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/AbstractScrapper.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 17, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(21): AbstractScrapper->scrapp('http://www.98ma...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-02 01:31:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:31:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:31:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: FF ~ APPPATH/classes/factory/AbstractScrapper.php [ 17 ]
2011-08-02 01:31:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: FF ~ APPPATH/classes/factory/AbstractScrapper.php [ 17 ]
--
#0 /home/rif/Documents/webframeworks/kohana/application/classes/factory/AbstractScrapper.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rif/Docum...', 17, Array)
#1 /home/rif/Documents/webframeworks/kohana/application/classes/controller/scrapper.php(21): AbstractScrapper->scrapp('http://www.98ma...')
#2 [internal function]: Controller_Scrapper->action_index()
#3 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Scrapper))
#4 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/rif/Documents/webframeworks/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-02 01:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:32:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:32:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:32:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:32:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 01:34:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 01:34:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 11:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 11:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 11:05:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 11:05:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-08-02 13:10:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-08-02 13:10:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/rif/Documents/webframeworks/kohana/index.php(109): Kohana_Request->execute()
#1 {main}