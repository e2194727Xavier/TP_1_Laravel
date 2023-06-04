<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    
    static public function selectVille(){ /* On doit utiliser ville au lieu de this lorsqu'on utilise static */
        $query = Ville::select()
        ->OrderBy('nom')
        ->get();
        return $query;
    }
}
