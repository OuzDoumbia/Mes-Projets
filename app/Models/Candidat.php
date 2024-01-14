<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    //Un candidat peut recevoir plusieurs vote 
    public function electeur(){
        return $this->hasMany(Electeur::class);
    }
    public function likes()
{
    return $this->hasMany(Like::class);
}
}
