<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedenteMedicina extends Model
{
    protected $table = 'antecedente_medicina';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['patologicos', 'alergicos', 'toxicos', 'farmacologicos', 'examen_fisico',
    'signos_vitales', 'cabeza_cuello', 'cardiopulmonar', 'abdominal', 'genitourinario', 'extremidades',
    'neurologico', 'laboratorio', 'analisis', 'diagnostico', 'tratamiento', 'firma']; 
}
