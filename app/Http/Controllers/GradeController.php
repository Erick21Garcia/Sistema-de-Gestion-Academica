<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Grade;
use App\Models\Subject;

class GradeController extends Controller
{
    public function grades()
    {
        $calificaciones = Grade::all();

        $materias = Subject::all();

        $carreras = Career::all();
        
        return view('calificaciones', compact('calificaciones', 'materias', 'carreras'));
    }

}