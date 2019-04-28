@extends('layouts.app')
{{-- Ovaj prikaz služi za kreiranje novog projekta --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-heading">
                Dodaj novi projekt
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->
                {{-- @include('common.errors') --}}

                <!-- New project Form -->
                <form action="{{ action('ProjectController@store')}}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- project Name -->
                    <div class="form-group">
                        <label for="project-name" class="col-sm-3 control-label">Naziv projekta</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="project-name" class="form-control" value="{{ old('project') }}">
                        </div>

                    </div>
                    
                    <!-- project Description -->
                    <div class="form-group">
                        <label for="project-description" class="col-sm-3 control-label">Opis projekta</label>
                        <div class="col-sm-6">
                            <input type="text" name="description" id="project-description" class="form-control" value="{{ old('project') }}">
                        </div>
                    </div>

                    <!-- project price -->
                    <div class="form-group">
                        <label for="project-description" class="col-sm-3 control-label">Cijena projekta</label>
                        <div class="col-sm-6">
                            <input type="text" name="price" id="project-description" class="form-control" value="{{ old('project') }}">
                        </div>
                    </div>

                    <!-- project begin time -->
                    <div class="form-group">
                        <label for="project-description" class="col-sm-3 control-label">Datum početka</label>
                        <div class="col-sm-6">
                            <input type="text" name="begin" id="project-description" class="form-control" value="{{ old('project') }}">
                        </div>
                    </div>

                    <!-- project end time -->
                    <div class="form-group">
                        <label for="project-description" class="col-sm-3 control-label">Datum završetka</label>
                        <div class="col-sm-6">
                            <input type="text" name="end" id="project-description" class="form-control" value="{{ old('project') }}">
                        </div>
                    </div>

                    <!-- Add project Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Dodaj projekt
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
