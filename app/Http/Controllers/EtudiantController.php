<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index() {
        //$liste_etudiants = Etudiant::all(); ou
        $etudiants = Etudiant::orderBy("nom", "asc")->get(); // Etudiant= nom du model de l'etudiant
        return view("etudiant", compact("etudiants"));
        //$etudiants = Etudiant::orderBy("nom", "asc")->paginate(10);  //paginate(10) permet de paginner
    }
}




