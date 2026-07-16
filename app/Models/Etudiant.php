<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etudiant extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nom',
        'prenom',
        'classe',
    ];
}
