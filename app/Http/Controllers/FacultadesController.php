<?php

namespace App\Http\Controllers;
use App\Models\Career;

class FacultadesController extends Controller
{
    public function ingenieria()
    {
        $carreras = Career::where('facultad_id', 3)->get();
        return view('ingenieria', compact('carreras'));
    }

    public function derecho()
    {
        $carreras = Career::where('facultad_id', 2)->get();
        return view('derecho', compact('carreras'));

    }

    public function ciencias()
    {
        $carreras = Career::where('facultad_id', 1)->get();
        return view('ciencias', compact('carreras'));
    }
}
