<?php

/**
 * @author Jonathan T.A <jonyjony777@gmail.com>
 */

namespace Libs;

use Illuminate\Database\Capsule\Manager as Capsule;

class SlimEloquent extends Capsule {

    public $db;

    /**
     * Establece las configuraciones de la base de datos.
     * @param array $config Configuraciones de la base de datos.
     */
    public function __construct($config = []) {
        $this->db = new Capsule();
        $this->db->addConnection($config);
        $this->db->setAsGlobal();
        $this->db->bootEloquent();
    }

}
