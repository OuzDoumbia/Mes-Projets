<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electeur extends Model
{
    use HasFactory;
    protected $guarded =[];
    
    //Electeur vote pour un candidat
    public function candidat(){
        return $this->belongsTo(Candidat::class);
    }
}
