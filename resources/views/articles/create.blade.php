@extends('layout')

@section('content')
    <h1>Write New Article</h1>
    <hr />

    {!! Form::model($article = new \App\Article(), ['action' => 'ArticlesController@store']) !!}
        @include('articles.form', ['submitButton' => 'Add Article'])
    {!! Form::close() !!}


    @include('errors.list')

@stop