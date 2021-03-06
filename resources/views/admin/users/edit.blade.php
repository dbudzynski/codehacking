@extends('layouts.admin')
@section('content')
    <h1>Edit User</h1>
    <div class="row">
        <div class="col-sm-3">

            <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt=""
                 class="img-responsive img-rounded">

        </div>

        <div class="col-sm-9">
            {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files'=>true]) !!}


            <div class='form-group'>
                {!! Form::label('photo_id', 'File: ') !!}
                {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
            </div>
            <div class='form-group'>
                {!! Form::label('name', 'User Name: ') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('email', 'Email ') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('role_id', 'Role: ') !!}
                {!! Form::select('role_id', ['' => 'Chose option'] + $roles, null, ['class' => 'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('password', 'Password: ') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('is_ative', 'Status: ') !!}
                {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active') , null, ['class' => 'form-control']) !!}
            </div>
            <div class="btn-toolbar">
                <div class="btn-group">
                    <div class='form-group'>
                        {!! Form::submit('Create User', ['class' => 'btn btn-info ']) !!}
                    </div>


                    {!! Form::close() !!}
                </div>
                <div class="btn-group">

                    {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}

                    <div class='form-group'>
                        {!! Form::submit('Delete User', ['class' => 'btn btn-danger ']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>


        </div>
    </div>
    <div class="row">
        @include('includes.form_errors')
    </div>

@endsection