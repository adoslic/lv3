<?php
use App\Project;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    // $projects = Project::orderBy('created_at','asc')->get();
    // return view('projects.index',[
    //     'projects' => $projects
    // ]);
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/projects', 'ProjectController@index');
Route::post('/project', 'ProjectController@store');
Route::delete('/project/{project}', 'ProjectController@destroy');

Route::post('/project', function(Request $request){
    $validator = Validator::make($request->all(),[
        'naziv_projekta'=>'required|max:255',
        'opis_projekta'=>'required|max:255',
        'cijena_projekta'=>'required|max:255',
        'obavljeni_posao'=>'required|max:255',
        'datum_pocetka'=>'required|max:255',
        'datum_zavrsetka'=>'required|max:255'
    ]);

    if($validator->fails()){
        return redirect('/')
        ->withInput()
        ->withErrors($validator);
    }
    $project = new Project;
    $project->naziv_projekta = $request->naziv_projekta;
    $project->save();
    return redirect('/');
});
Route::delete('/project/{id}', function($id){
    //
});