<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'localhost';
$query_builder = TRUE;
$db['localhost'] = array(
	'dsn'	=> '',	
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'ci_saddam',
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
$db['live'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'amindesignsss_new',
	'password' => 'Root@123',
	'database' => 'amindesignsss_new',
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
