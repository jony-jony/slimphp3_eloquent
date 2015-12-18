<?php

return [
    "accepted"          => "El campo :attribute debe ser aceptado.",
    "active_url"        => "El campo :attribute no es una URL válida.",
    "after"             => "El campo :attribute debe ser una fecha posterior a :date.",
    "alpha"             => "El campo :attribute solo puede contener letras.",
    "alpha_dash"        => "El campo :attribute solo puede contener letras, números y guiones.",
    "alpha_num"         => "El campo :attribute solo puede contener letras y números.",
    "array"             => "El campo :attribute debe ser un array.",
    "before"            => "El campo :attribute debe ser una fecha anterior a :date.",
    "between" => [
        "numeric" => "El campo :attribute debe estar entre :min y :max.",
        "file"    => "El campo :attribute debe ser entre :min y :max kilobytes.",
        "string"  => "El campo :attribute debe estar entre :min y :max caracteres.",
        "array"   => "El campo :attribute debe tener entre :min y :max elementos.",
    ],
    "confirmed"         => "El campo de confirmación de :attribute no coincide.",
    "date"              => "El campo :attribute no es una fecha válida.",
    "date_format"       => "El campo :attribute no coincide con el formato :format.",
    "different"         => "El campo :attribute y :other deben ser distintos.",
    "digits"            => "El campo :attribute debe contener :digits dígitos.",
    "digits_between"    => "El campo :attribute debe contener entre :min y :max dígitos.",
    "email"             => "El formato del campo :attribute es inválido.",
    "exists"            => "El campo seleccionado :attribute es inválido.",
    "image"             => "El campo :attribute debe ser una imagen.",
    "in"                => "El campo seleccionado :attribute es inválido.",
    "integer"           => "El campo :attribute debe ser un entero.",
    "ip"                => "El campo :attribute debe ser una IP válida.",
    "max" => [
        "numeric" => "El campo :attribute no puede ser superior a :max.",
        "file"    => "El campo :attribute no puede superar de :max kilobytes.",
        "string"  => "El campo :attribute no puede superar de :max caracteres.",
        "array"   => "El campo :attribute no puede contener más de :max elementos.",
    ],
    "mimes" => "El campo :attribute debe ser un archivo de tipo: :values.",
    "min" => [
        "numeric" => "El campo :attribute debe ser de al menos :min.",
        "file"    => "El campo :attribute debe ser de al menos :min kilobytes.",
        "string"  => "El campo :attribute debe ser de al menos :min caracteres.",
        "array"   => "El campo :attribute mdebe ser de al menos :min elementos.",
    ],
    "not_in"            => "El campo seleccionado :attribute es inválido.",
    "numeric"           => "El campo :attribute debe ser un número.",
    "regex"             => "EL formato del campo :attribute es inválido.",
    "required"          => "El campo :attribute es requerido.",
    "required_if"       => "El campo :attribute es requerido cuando :other es :value.",
    "required_with"     => "El campo :attribute es requerido cuando :values existe.",
    "required_with_all" => "El campo :attribute es requerido",
    "required_without"  => "El campo :attribute es requerido cuando :values no existe.",
    "same"              => "El campo :attribute y :other deben ser iguales.",
    "size" => [
        "numeric" => "El campo :attribute debe ser :size.",
        "file"    => "El campo :attribute debe ser :size kilobytes.",
        "string"  => "El campo :attribute debe ser :size caracteres.",
        "array"   => "El campo :attribute debe contener :size elementos.",
    ],
    "unique"            => "El campo :attribute ya existe.",
    "url"               => "El formato del campo :attribute es inválido.",
    //added
    "alpha_spaces"      => "El campo :attribute solo puede contener letras y espacios.",
    "alpha_num_spaces"  => "El campo :attribute solo puede contener letras, espacios y números.",
    "time"              => "El formato del campo :attribute es inválido",
    "min_count"         => "El campo :attribute debe tener al menos :count :element",
    "max_count"         => "El campo :attribute debe tener como máximo :count :element",
    /*
      |--------------------------------------------------------------------------
      | Custom Validation Language Lines
      |--------------------------------------------------------------------------
      |
      | Here you may specify custom validation messages for attributes using the
      | convention "attribute.rule" to name the lines. This makes it quick to
      | specify a specific custom language line for a given attribute rule.
      |
     */
    'custom' => [],
    /*
      |--------------------------------------------------------------------------
      | Custom Validation Attributes
      |--------------------------------------------------------------------------
      |
      | The following language lines are used to swap attribute place-holders
      | with something more reader friendly such as E-Mail Address instead
      | of "email". This simply helps us make messages a little cleaner.
      |
     */
    'attributes' => [],
];
