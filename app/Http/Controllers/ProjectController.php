<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;
use App\User;

class ProjectController extends Controller
{

    public function __construct(){          //u konstruktoru provjeravamo autentifikaciju korisnika
        $this->middleware('auth');
    }


        public function index(){
            if(\Auth::check()){                 //provjera je li korisnik logiran
                $id = \Auth::user()->id;        //dohvati id korisnika koji je logiran
                $projects = Project::all();     //dohvati sve projekte
                return view('projects.index', compact('id','projects'));        //otvori pogled index s varijablama id i projects
            }
            else return view('auth/login');     //ako nije logiran preusmjeravamo ga da se logira
        }

        public function create(){
            return view('projects/create');     //otvori pogled create
        }

        public function store(Request $request){    //funkcija za spremanje podataka u bazu
            $this->validate($request,[              //provjeri jesu li svi podaci uneseni
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
                'begin' => 'required',
                'end' => 'required'

            ]);
            $project = new Project;                             //kreiranje novog objekta
            $project->user_id = \Auth::user()->id;              //popunjavanje novog objekta s unesenim podacima
            $project->naziv_projekta = $request->input('name');
            $project->opis_projekta = $request->input('description');
            $project->cijena_projekta = $request->input('price');
            $project->datum_početka = $request->input('begin');
            $project->datum_završetka = $request->input('end');

            $project->save();                                    //spremanje tog objekta u bazu   
            return redirect('/projects');                        //preusmjeravanje
        }

        public function show($id){                                 //funkcija za prikaz jednog projekta
            $project = Project::find($id);                          //dohvaćanje projekta kojeg želimo prikazat 
            $tim = unserialize($project->tim);                       
            $user = \Auth::user()->name;
            return view('projects.show', compact('tim','project','user'));      //prikaz pogleda s prosljeđenim varijablama
        }

        public function edit($id){                                          //funkcija za uređivanje članova tima
            $users = User::all();
            $project_id = $id;
            $id = \Auth::user()->id;
            return view('projects.edit', compact('id','users','project_id'));
        }

        public function update(Request $request, $id){      //funkcija za update članova tima
            $project= Project::find($id);                   //potrebno je serializirati podatke kako bi mogli niz spremit u bazu 
            $project->tim = $request->input('tim');
            $serializedArr = serialize($project->tim);
            $project->tim = $serializedArr;
            $project->save();
            return redirect('/projects');
        }

        public function destroy($id){               //funkcija za brisanje projekta
            //
        }
}
