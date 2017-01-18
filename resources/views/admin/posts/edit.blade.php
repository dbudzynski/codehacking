@extends('layouts.admin')

@section('content')
    <h1>Edit Post</h1>

    <div class="row">
        <div class="col-sm-3">

            <img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

        </div>
        <div class="col-sm-9">
        {!! Form::model($post, ['method' => 'PATCH', 'action' => ['AdminPostsController@update', $post->id], 'files'=>true]) !!}

        <div class='form-group'>
            {!! Form::label('title', 'Title: ') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::label('category_id', 'Category: ') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::label('photo_id', 'Photo: ') !!}
            {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::label('body', 'Body: ') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>
        <div class="btn-toolbar">
            <div class="btn-group">
                <div class='form-group'>
                    {!! Form::submit('Save Post', ['class' => 'btn btn-info']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="btn-group">

                {!! Form::open(['method' => 'DELETE', 'action' => ['AdminPostsController@destroy', $post->id]]) !!}

                <div class='form-group'>
                    {!! Form::submit('Delete Post', ['class' => 'btn btn-danger ']) !!}
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