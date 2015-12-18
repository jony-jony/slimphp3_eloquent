<?php

/**
 * @author Jonathan T.A <jonyjony777@gmail.com>
 */
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {

    protected $table           = 'users';
    protected $primaryKey      = 'id_user';
    public static $rules = [
        'name'     => 'required|alpha',
        'email'    => 'required|email',
        'password' => 'required|confirmed',
    ];
    public static $fancyLabels = [
        'name'               => 'nombre',
        'email'              => 'correo',
        'password'           => 'contraseña',
        'password_confirmed' => 'confirmación de contraseña',
    ];

}
