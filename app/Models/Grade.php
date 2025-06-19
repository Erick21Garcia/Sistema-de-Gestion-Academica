<?php

// app/Models/Grade.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $table = 'calificaciones';

    protected $fillable = ['users_id, materia_id, calificacion, fecha_subida'];
}
