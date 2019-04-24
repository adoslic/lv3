<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;

class ProjectController extends Controller
{

    

    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $request){
        return view('projects.index');
    }
    public function store(Request $request){
        $this->validate($request,[
        'naziv_projekta'=>'required|max:255',
        'opis_projekta'=>'required|max:255',
        'cijena_projekta'=>'required|max:255',
        'obavljeni_posao'=>'required|max:255',
        'datum_pocetka'=>'required|max:255',
        'datum_zavrsetka'=>'required|max:255']);

        $request->user()->projects()->create([
            'naziv_projekta' => $request->naziv_projekta,
            'opis_projekta' => $request->opis_projekta,
            'cijena_projekta' => $request->cijena_projekta,
            'obavljeni_posao' => $request->obavljeni_posao,
            'datum_pocetka' => $request->datum_pocetka,
            'datum_zavrsetka' => $request->datum_zavrsetka,
            ]);

        return redirect('/projects');
    }
    //
}
