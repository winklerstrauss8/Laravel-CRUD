<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/login', [EtudiantController::class, 'authStudent']);
// Route::get('/', [EtudiantController::class, 'pageEtudiant']);
Route::delete('/deleteStudent/{id}', [EtudiantController::class, 'deleteStudent']);
Route::get('/updateStudent/{id}', [EtudiantController::class, 'updateStudent']);
Route::post('/update/traitment', [EtudiantController::class, 'updateStudentTraitment']);
Route::get('/etudiant', [EtudiantController::class, 'listStudent']);
Route::get('/student', [EtudiantController::class, 'listStudent']);
Route::get('/add', [EtudiantController::class, 'addStudent']);
Route::post('/add/traitment', [EtudiantController::class, 'addStudentTraitment']);