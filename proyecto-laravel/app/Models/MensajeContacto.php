<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MensajeContacto extends Model
{
     protected $table = 'mensaje_contactos';

    protected $fillable = [
        'nombre',
        'correo',
        'telefono',
        'mensaje',
    ];
}
