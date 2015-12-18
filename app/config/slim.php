<?php

/**
 * Configuraciones de Slim
 * @author Jonathan T.A <jonyjony777@gmail.com>
 */
return [
    'settings' => [
        'displayErrorDetails' => true,
    ],
    'db' => $eloquent,
    'validator' => function() use($configDB){
        return new Libs\SlimValidator($configDB['connections'][$configDB['default']]);
    },
    'view' => function() use($config){
        $view = new \Slim\Views\Twig(VIEWS_DIR, [
            'charset'          => 'utf-8',
            'cache'            => false, //para almacenar en cache cambiar false por VIEWS_DIR . 'cache'
            'auto_reload'      => false,
            'strict_variables' => true,
            'autoescape'       => true,
            'debug'            => true,
        ]);
        
        foreach ($config as $key => $value) {
            $view->getEnvironment()->addGlobal($key, $value);
        }
        $view->addExtension(new \Twig_Extension_Debug());
        
        return $view;
    },
    'log' => function() {
        $log = new \Monolog\Logger('app');
        $log->pushHandler(new Monolog\Handler\StreamHandler(APP_DIR . 'logs'. DS .'app.log', \Monolog\Logger::DEBUG));

        return $log;
    },
    'errorHandler' => function($c) {
        return new Libs\SlimHandlerError($c->log, $c->settings['displayErrorDetails']);
    },
];
