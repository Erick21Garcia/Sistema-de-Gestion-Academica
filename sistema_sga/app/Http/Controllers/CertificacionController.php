<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificacionController extends Controller
{
    public function certificado()
    {
        return view('certificados');
    }
}
