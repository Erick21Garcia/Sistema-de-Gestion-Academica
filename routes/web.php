<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\FacultadesController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\CertificacionController;
use App\Http\Controllers\PDFController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/calificaciones', [GradeController::class, 'grades']);
Route::get('/matricula', [EnrollmentController::class, 'enrollment']);
Route::get('/index', [FacultadController::class, 'index']);
Route::get('/ingenieria', [FacultadesController::class, 'ingenieria']);
Route::get('/derecho', [FacultadesController::class, 'derecho']);
Route::get('/ciencias', [FacultadesController::class, 'ciencias']);
Route::get('/certificados', [CertificacionController::class, 'certificado']);
Route::post('/matricular/{id}', [EnrollmentController::class, 'matricular'])->name('matricular');
Route::get('download-static-pdf', [PDFController::class, 'downloadStaticPDF'])->name('pdf.download.static');
Route::get('download-dynamic-pdf', [PDFController::class, 'downloadDynamicPDF'])->name('pdf.download.dynamic');
Route::get('download-conducta-pdf', [PDFController::class, 'downloadConductaPDF'])->name('pdf.download.conducta');
Route::get('download-pasantia-pdf', [PDFController::class, 'downloadPasantiaPDF'])->name('pdf.download.pasantia');