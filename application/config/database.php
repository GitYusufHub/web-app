<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	/*
	'hostname' => 'localhost',
    'username' => 'u933077069_ephnosfilm',
	'password' => 'Hu14531071.',
	'database' => 'u933077069_ephnosfilm',*/
	'hostname' => 'localhost',
	'username' => 'ephnos',
	'password' => 'DR4FyWBDjsKxJPsY',
	'database' => 'ephnos',

	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
