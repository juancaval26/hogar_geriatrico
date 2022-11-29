<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    protected $table = 'valoracion';
    protected $primaryKey = 'id';
    // si no se pone esta instruccion da error al guardar
    public $timestamps = false;
    protected $fillable = ['nombre', 'apellido', 'historia_clinica', 'edad', 'sexo', 'modulo',
    'fecha', 'detalle'];
}
