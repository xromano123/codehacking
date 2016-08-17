@extends('layouts.admin')



@section('content')

    <h1>Create Posts</h1>

    <div class="row">
        {!! Form::open(['method'=>'POST', 'action'=> 'AdminPostsController@store', 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('Title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control'])!!}
            </div>

             <div class="form-group">
                     {!! Form::label('category_id', 'Categpry:') !!}
                     {!! Form::select('category_id', array(1=>'JavaScript', 2=>'PHP', 3=>'Boostrap'), null, ['class'=>'form-control'])!!}
             </div>

             <div class="form-group">
                     {!! Form::label('photo_id', 'Photo:') !!}
                     {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
             </div>


             <div class="form-group">
                     {!! Form::label('body', 'Descrtiption:') !!}
                     {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>9])!!}
             </div>


            <div class="form-group">
                {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
    </div>

    <div class="row">
        @include('includes.form_error')
    </div>

@stop
