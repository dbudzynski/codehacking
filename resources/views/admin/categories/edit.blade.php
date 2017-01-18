@extends('layouts.admin')

@section('content')
    <h1>Categories Edit</h1>

    <div class="row">

        {!! Form::model($category, ['method' => 'PATCH', 'action' => ['AdminCategoryController@update', $category->id]]) !!}

        <div class='form-group'>
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="btn-toolbar">
            <div class="btn-group">
                <div class='form-group'>
                    {!! Form::submit('Update Category', ['class' => 'btn btn-info']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="btn-group">

                {!! Form::open(['method' => 'DELETE', 'action' => ['AdminCategoryController@destroy', $category->id]]) !!}

                <div class='form-group'>
                    {!! Form::submit('Delete Category', ['class' => 'btn btn-danger']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
    <div class="row">
        @include('includes.form_errors')
    </div>
@endsection