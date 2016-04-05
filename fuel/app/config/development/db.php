<?php

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=192.168.50.5;dbname=livogis_dev',

			'username'   => 'root',
			'password'   => 'root',
			'persistent' => false,
			'compress'   => false,
			'socket'     => '/var/run/mysqld/mysqld.sock',
		),
		'identifier'     => '`',
		'table_prefix'   => '',
		'charset'        => 'utf8',
		'enable_cache'   => true,
		'profiling'      => false,
		'readonly'       => false,
	),
);
