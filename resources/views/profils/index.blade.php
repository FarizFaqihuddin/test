@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profil List</div>
                <div class="panel-body">
                    <a href="{{ url('/home') }}" class="btn btn-danger"> Back </a>
                    <a href="{{ url('profils/create') }}" class="btn btn-primary">Add </a>

                    <br>
                    <br>
                    <br>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>NIK</th>
                                <th>Position</th>
                                <th>Action</th>
                            </th>

                            @if(! count($profils))
                                <tr>
                                    <td colspan="3">No profil</td>
                                </tr>
                            @endif
                            @foreach($profils as $profil)
                                <tr>
                                    <td>{{ $profil->name }}</td>
                                    <td>{{ $profil->email }}</td>
                                    <td>{{ $profil->nik }}</td>
                                    <td>{{ $profil->position }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ url('profils/'.$profil->id.'/edit') }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ url('profils/'.$profil->id.'/delete') }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection