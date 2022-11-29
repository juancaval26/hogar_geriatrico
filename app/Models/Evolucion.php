<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evolucion extends Model
{
    protected $table = 'evolucion';
    protected $primaryKey = 'id';
    // si no se pone esta instruccion da error al guardar
    public $timestamps = false;
    protected $fillable = ['nombre', 'apellido', 'historia_clinica', 'edad', 'sexo', 'modulo',
    'fecha', 'detalle'];
}
