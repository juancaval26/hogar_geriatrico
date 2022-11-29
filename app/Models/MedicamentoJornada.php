<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicamentoJornada extends Model
{
    use HasFactory;
    protected $table = 'medicamentos_jornada';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['medicamento', 'dosis', 'via', 'jornada', 'observaciones', 'fecha_revision',
    'firma_auxiliar', 'kardex_id'];
}
