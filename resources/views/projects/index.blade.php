@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dodaj novi projekt
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    <!-- @include('common.errors') -->

                    <!-- New Task Form -->
                    <form action="{{ url('project') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="project-name" class="col-sm-3 control-label">Naziv projekta</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="project-name" class="form-control" value="{{ old('project') }}">
                            </div>

                        </div>
                        
                        <!-- Task Description -->
                        <div class="form-group">
                            <label for="project-description" class="col-sm-3 control-label">Opis projekta</label>
                            <div class="col-sm-6">
                                <input type="text" name="description" id="project-description" class="form-control" value="{{ old('project') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
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
@endsection
