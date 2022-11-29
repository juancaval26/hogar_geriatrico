<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedenteGeriatria extends Model
{
    protected $table = 'antecedente_geriatria';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['hepatitis', 'tuberculosis', 'diabetes', 'hipertension_arterial', 'infarto_miocardio',
    'ACV', 'osteoartritis', 'intervencion_quirurgica', 'accidentes', 'cancer', 'medicamento_frecuente',
    'hospitalizado']; 
}
