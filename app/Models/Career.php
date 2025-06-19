<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $table = 'carrera';

    protected $fillable = ['carrera_name, facultad_id, carrera_description'];

    public function facultad()
    {
        return $this->belongsTo(Facultad::class);
    }
}
