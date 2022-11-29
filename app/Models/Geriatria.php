<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geriatria extends Model
{
    protected $table = 'geriatria';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['fecha_actual', 'impresion_general', 'nombre', 'apellido', 'sexo',
    'edad', 'fecha_nacimiento', 'estado_civil', 'ocupacion', 'identificacion', 'rh', 'etnia',
    'desplazado', 'ciudad', 'responsable', 'antecedente_geriatria_id']; 
}
