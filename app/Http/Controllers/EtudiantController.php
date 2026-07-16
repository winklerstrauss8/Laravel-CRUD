<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{
    public function listStudent(){
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }

    public function addStudent(){
        return view('etudiant.ajouter');
    }

    public function addStudentTraitment(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);

        Etudiant::create($request->all());

        return redirect('/student')->with('status', 'Étudiant ajouté avec succès !');

    }

    public function updateStudent($id){
        $etudiants = Etudiant::findOrFail($id);
        return view("etudiant.update", compact('etudiants'));
    }

    public function updateStudentTraitment(Request $request){
        $etudiant = Etudiant::findOrFail($request->id);
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);
        
        Etudiant::where('id', $request->id)->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'classe' => $request->classe
        ]);


        return redirect('/student')->with('status', 'Étudiant modifié avec succès !');
    }

    public function deleteStudent($id){
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();
        return redirect('/student')->with('status', 'Étudiant supprimé avec succès !');
    }

    public function pageEtudiant(){
        return redirect('/student');
    }

    public function authStudent(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/student');
        }

        return back()->withErrors([
            'email' => "Les informations d'identification sont incorrectes.",
        ])->onlyInput('email');
    }
}
