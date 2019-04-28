@extends('layouts.app')
{{-- Ovaj prikaz nam omogućuje dodavanje novih članova u projektni tim --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
                <form action="{{ action('ProjectController@update', $project_id)}}" method="POST">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    @foreach ($users as $user)
                        @if($user->id != $id)
                            <div class="form-check">
                                <input type="checkbox" name="tim[]" value="{{$user->name}}" class="form-check-input" id="{{$user->id}}">
                                <label class="form-check-label" for="{{$user->id}}">{{$user->name}}</label>
                            </div>
                        @endif
                    @endforeach
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-btn fa-plus"></i>Dodaj na projekt</button>
                    
                    <input name="_method" type="hidden" value="PUT">
                </form>
        </div>
    </div>
</div>
@endsection
