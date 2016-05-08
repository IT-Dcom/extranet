<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */


 // a MySQL driver configuration
 'development' => array(
     'type'           => 'mysqli',
     'connection'     => array(
         'hostname'       => 'localhost',
         'port'           => '3306',
         'database'       => 'fuel_db',
         'username'       => 'your_username',
         'password'       => 'y0uR_p@ssW0rd',
         'persistent'     => false,
         'compress'       => false,
     ),
     'identifier'     => '`',
     'table_prefix'   => '',
     'charset'        => 'utf8',
     'enable_cache'   => true,
     'profiling'      => false,
     'readonly'       => false,
 );

return array(

);
