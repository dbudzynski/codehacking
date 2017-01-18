@extends('layouts.admin')

@section('content')
    <h1>Categories Create</h1>

    <div class="row">

        {!! Form::open(['method' => 'POST', 'action' => 'AdminCategoryController@store']) !!}

        <div class='form-group'>
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::submit('Create Category', ['class' => 'btn btn-info']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="row">
        @include('includes.form_errors')
    </div>
@endsection