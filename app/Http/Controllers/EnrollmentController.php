<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Career;

class EnrollmentController extends Controller
{
    public function enrollment()
    {
        $carreras = Career::all();
        return view("matricula", compact('carreras'));
    }

    public function matricular(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->carrera_id) {
            return redirect()->back()->with('error', 'Ya está matriculado en otra carrera.');
        }

        $request->validate([
            'f_inscripcion' => 'required|date',
        ]);

        $user->carrera_id = $id;
        $user->f_inscripcion = $request->input('f_inscripcion');
        $user->save();

        return redirect()->back()->with('success', 'Matriculado con éxito en la carrera.');
    }
}
