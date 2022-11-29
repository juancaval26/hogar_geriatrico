<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicina extends Model
{
    use HasFactory;

    protected $table = 'medicina_general';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['fecha', 'nombre', 'apellido', 'edad', 'motivo_consulta',
    'enfermedad_actual', 'revision_sistemas', 'antecedente_medicina_id','documento','lugar_documento'];

}
