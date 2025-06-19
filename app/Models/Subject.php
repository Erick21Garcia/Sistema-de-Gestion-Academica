<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    // Especifica la tabla asociada con el modelo
    protected $table = 'materia';

    // Define los campos que se pueden asignar masivamente
    protected $fillable = ['materia_name', 'carrera_id', 'materia_descripcion', 'credits'];
    
}
