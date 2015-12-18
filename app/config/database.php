<?php

/**
 * Configuraciones de la base de datos
 * @author Jonathan T.A <jonyjony777@gmail.com>
 */
return [
    'default'     => 'mysql',
    'connections' => [
        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => __DIR__ . '/../database/production.sqlite',
            'prefix'   => '',
        ],
        'mysql'  => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => '',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
        'pgsql'  => [
            'driver'   => 'pgsql',
            'host'     => 'localhost',
            'database' => '',
            'username' => '',
            'password' => '',
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
        ],
        'sqlsrv' => [
            'driver'   => 'sqlsrv',
            'host'     => 'localhost',
            'database' => '',
            'username' => '',
            'password' => '',
            'prefix'   => '',
        ],
    ]
];
