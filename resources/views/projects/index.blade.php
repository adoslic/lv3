@extends('layouts.app')
{{-- Prikaz svih projekata koje je korisnik kreirao --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
                
                @if(count($projects)>0)
                    @foreach ($projects as $project)
                        @if($project->user_id == $id)
                        <div class="panel panel-default">
                        <div class="panel-heading"><a href="projects/{{$project->id}}">{{$project->naziv_projekta}}</a></div>

                            <div class="panel-body">
                                {{$project->opis_projekta}}
                            </div>
                        </div>
                        
                        @endif
                    @endforeach
                    <button type="button" class="btn btn-default" onclick="window.location='{{ '/projects/create' }}'">
                        <i class="fa fa-btn fa-plus"></i>Dodaj projekt</button>
                @else
                {{-- Ako nema projekata, onda se ispisuje poruka --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">Nema projekta</div>
                    </div>
                @endif
        </div>
    </div>
</div>
@endsection
