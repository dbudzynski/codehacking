@extends('layouts.admin')

@section('content')
    <h1>Posts Create</h1>

    <div class="row">

    {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'files'=>true]) !!}
    
        <div class='form-group'>
            {!! Form::label('title', 'Title: ') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::label('category_id', 'Category: ') !!}
            {!! Form::select('category_id',array('1'=>'PHP', '0'=>'JAVA', '2'=>'JavaScript'), null, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::label('photo_id', 'Photo: ') !!}
            {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::label('body', 'Body: ') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::submit('Save Post', ['class' => 'btn btn-info']) !!}
        </div>
    {!! Form::close() !!}
    </div>
    <div class="row">
     @include('includes.form_errors')
     </div>
@endsection