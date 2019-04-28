@extends('layouts.app')
{{-- prikaz pojedinog projekta sa svim potrebnim informacijama o tome projektu --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Naziv projekta: {{$project->naziv_projekta}}</div>

                    <div class="panel-body">
                        {{'Voditelj projekta: '. $user}}
                        <br>
                        {{'Tim na projektu: '}}
                        @if($tim != '')
                            @foreach ($tim as $clan)
                                {{$clan.', '}}
                            @endforeach
                        @else 
                            {{'samo voditelj projekta'}}
                        @endif
                        <br>
                        {{'Opis projekta: '.$project->opis_projekta}}
                        <br>
                        {{'Cijena projekta: '.$project->cijena_projekta}}
                        <br>
                        {{'Obavljeni poslovi: '.$project->obavljeni_poslovi}}
                        <br>
                        {{'Datum početka: '.$project->datum_početka}}
                        <br>
                        {{'Datum završetka: '.$project->datum_završetka}}
                        <br>
                    </div>

                </div>
                
                <a href="/projects/{{$project->id}}/edit" class="btn btn-default">
                    <i class="fa fa-btn fa-plus"></i>Dodaj člana tima</a>
        </div>
    </div>
</div>
@endsection
