<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Project extends Model
{
    
    protected $fillable = ['naziv_projekta','opis_projekta','cijena_projekta',
                            'obavljeni_posao','datum_pocetka','datum_zavrsetka',];
    
    //projekt može pripadati samo jednom korisniku
    public function user(){
        return $this->belongsTo(User::class);
    }
}
