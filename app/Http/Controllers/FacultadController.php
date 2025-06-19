<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facultad;

class FacultadController extends Controller
{
    public function index()
    {
        $facultades = Facultad::all();
        return view('index', compact('facultades'));
    }
}