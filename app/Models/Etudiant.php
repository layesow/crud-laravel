<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    public function classe(){ //ici on a creer cette fonction classe pour mettre en relation entre Etudiant et Classe
        return $this->belongsTo(classe::class); // c-a-d que l'etudiant a une seule classe (belongsTo = OneToOne)
    }
}
