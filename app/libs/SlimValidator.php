<?php

/**
 * @author Jonathan T.A <jonyjony777@gmail.com>
 */

namespace Libs;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Factory;
use Illuminate\Container\Container;
use Illuminate\Database\Connectors\ConnectionFactory;
use Illuminate\Database\ConnectionResolver;
use Illuminate\Validation\DatabasePresenceVerifier;

class SlimValidator extends Factory {

    public function __construct($config = [], $locale = 'en') {
        $file_system      = new Filesystem();
        $fileloader       = new FileLoader($file_system, ROOT . 'app' . DS . 'lang');
        $translator       = new Translator($fileloader, $locale);
        $container        = new Container();
        $connFactory      = new ConnectionFactory($container);
        $connection       = $connFactory->make($config);
        $resolver         = new ConnectionResolver();
        $resolver->addConnection('default', $connection);
        $resolver->setDefaultConnection('default');
        $presenceVerifier = new DatabasePresenceVerifier($resolver);
        parent::__construct($translator);
        $this->setPresenceVerifier($presenceVerifier);
    }

    public function setLocale($locale) {
        $this->getTranslator()->setLocale($locale);
    }

}
