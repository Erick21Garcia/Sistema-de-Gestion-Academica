<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Facultad;
use App\Models\Subject;
use App\Models\Grade;
use PDF;

class PDFController extends Controller
{
    public function downloadStaticPDF()
    {
        $user = auth()->user();

        $carrera = Career::where('id', $user->carrera_id)->first();
        $facultad = Facultad::where('id', $carrera->facultad_id)->first();
        $materias = Subject::where('carrera_id', $carrera->id)->get();
        $calificaciones = Grade::where('users_id', $user->id)
            ->whereIn('materia_id', $materias->pluck('id'))
            ->get()
            ->keyBy('materia_id');
        $materias->each(function ($materia) use ($calificaciones) {
            $materia->calificacion = $calificaciones->get($materia->id)->calificacion ?? 'N/A';
        });

        $pdf = PDF::loadView('pdf.static', [
            'user' => $user,
            'facultad' => $facultad,
            'carrera' => $carrera,
            'materias' => $materias
        ]);

        return $pdf->download('Boleta de calificaciones.pdf');
    }


    public function downloadDynamicPDF()
    {
        $user = auth()->user();

        $carrera = Career::where('id', $user->carrera_id)->first();
        $facultad = Facultad::where('id', $carrera->facultad_id)->first();
        $materias = Subject::where('carrera_id', $carrera->id)->get();
        $calificaciones = Grade::where('users_id', $user->id)->whereIn('materia_id', $materias->pluck('id'))->get();

        $pdf = PDF::loadView('pdf.dynamic', [
            'user' => $user,
            'facultad' => $facultad,
            'carrera' => $carrera,
            'materias' => $materias,
            'calificaciones' => $calificaciones
        ]);

        return $pdf->download('Hoja de matrícula.pdf');
    }


    public function downloadConductaPDF()
    {
        $user = auth()->user();

        $carrera = Career::where('id', $user->carrera_id)->first();
        $facultad = Facultad::where('id', $carrera->facultad_id)->first();
        $materias = Subject::where('carrera_id', $carrera->id)->get();
        $calificaciones = Grade::where('users_id', $user->id)->whereIn('materia_id', $materias->pluck('id'))->get();

        $pdf = PDF::loadView('pdf.conducta', [
            'user' => $user,
            'facultad' => $facultad,
            'carrera' => $carrera,
            'materias' => $materias,
            'calificaciones' => $calificaciones
        ]);

        return $pdf->download('Certificado de conducta.pdf');
    }


    public function downloadPasantiaPDF()
    {
        $user = auth()->user();

        $carrera = Career::where('id', $user->carrera_id)->first();
        $facultad = Facultad::where('id', $carrera->facultad_id)->first();
        $materias = Subject::where('carrera_id', $carrera->id)->get();
        $calificaciones = Grade::where('users_id', $user->id)->whereIn('materia_id', $materias->pluck('id'))->get();

        $pdf = PDF::loadView('pdf.pasantia', [
            'user' => $user,
            'facultad' => $facultad,
            'carrera' => $carrera,
            'materias' => $materias,
            'calificaciones' => $calificaciones
        ]);

        return $pdf->download('Carta de prácticas.pdf');
    }
}
