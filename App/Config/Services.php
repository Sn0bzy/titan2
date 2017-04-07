<?php
/*************************************************
 * Titan-2 Mini Framework
 * Providers, facades, middlewares and listeners
 *
 * Author 	: Turan Karatuğ
 * Web 		: http://www.titanphp.com
 * Docs 	: http://kilavuz.titanphp.com 
 * Github	: http://github.com/tkaratug/titan2
 * License	: MIT	
 *
 *************************************************/
return [

	/**
	 * Service Providers
	 */
	'providers'		=> [
		'Import'					=> 'System\Kernel\Import',
		'Config'					=> 'System\Kernel\Config',
		'Request'					=> 'System\Libs\Http\Request',
		'Response'					=> 'System\Libs\Http\Response',
		'Curl'						=> 'System\Libs\Http\Curl',
		'Event'						=> 'System\Libs\Event\Event',
		'View'						=> 'System\Libs\View\View',
		'Session'					=> 'System\Libs\Session\Session',
		'Flash'						=> 'System\Libs\Session\Flash',
		'Cookie'					=> 'System\Libs\Cookie\Cookie',
		'Cache'						=> 'System\Libs\Cache\Cache',
		'Benchmark'					=> 'System\Libs\Benchmark\Benchmark',
		'Log'						=> 'System\Libs\Log\Log',
		'Asset'						=> 'System\Libs\Asset\Asset',
		'Validation'				=> 'System\Libs\Validation\Validation',
		'Pagination'				=> 'System\Libs\Pagination\Pagination',
		'Mail'						=> 'System\Libs\Mail\Mail',
		'Html'						=> 'System\Libs\Html\Html',
		'Form'						=> 'System\Libs\Html\Form',
		'DB'						=> 'System\Libs\Database\DB',
	],

	/**
	 * Facades
	 */
	'facades'		=> [
		'Import'					=> 'System\Facades\Import',
		'Config'					=> 'System\Facades\Config',
		'Request'					=> 'System\Facades\Request',
		'Response'					=> 'System\Facades\Response',
		'Curl'						=> 'System\Facades\Curl',
		'Event'						=> 'System\Facades\Event',
		'View'						=> 'System\Facades\View',
		'Session'					=> 'System\Facades\Session',
		'Flash'						=> 'System\Facades\Flash',
		'Cookie'					=> 'System\Facades\Cookie',
		'Cache'						=> 'System\Facades\Cache',
		'Benchmark'					=> 'System\Facades\Benchmark',
		'Log'						=> 'System\Facades\Log',
		'Asset'						=> 'System\Facades\Asset',
		'Validation'				=> 'System\Facades\Validation',
		'Pagination'				=> 'System\Facades\Pagination',
		'Mail'						=> 'System\Facades\Mail',
		'Html'						=> 'System\Facades\Html',
		'Form'						=> 'System\Facades\Form',
		'DB'						=> 'System\Facades\DB',
	],

	/**
	 * Middlewares
	 */
	'middlewares'	=> [
		'Auth'						=> 'App\Middlewares\Auth',
	],

	/**
	 * Listeners
	 */
	'listeners'		=> [
		'sampleEvent'				=> [
			'App\Listeners\SampleListener',
		],
	]

];