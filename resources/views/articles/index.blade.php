@extends('layout')

@section('content')
    <h1>Articles</h1>
    <hr />

    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a>
                @if(Auth::check())
                <a class="btn btn-sm btn-danger" href="{{ action('ArticlesController@edit', ['article' => $article]) }}" role="button">Edit</a>
                @endif
            </h2>

            <div class="body">
                {{ $article->body }}
            </div>

        </article>
    @endforeach
@stop