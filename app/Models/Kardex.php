<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    protected $table = 'kardex';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['fecha', 'nombre', 'apellido', 'eps', 'cedula', 'diagnostico',
    'nombre_tratante'];
}
