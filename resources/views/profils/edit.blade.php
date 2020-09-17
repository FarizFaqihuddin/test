@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Profil List</div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('/profils/' . $profil->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('put') }}

                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $profil->name }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="text" name="email" class="form-control" value="{{ $profil->email }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">NIK</label>
                                <input type="text" name="nik" class="form-control" value="{{ $profil->nik }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Position</label>
                                <input type="text" name="position" class="form-control" value="{{ $profil->position }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Profil</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection