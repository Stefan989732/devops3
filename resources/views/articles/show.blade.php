@extends('layout')

<head>
    <title>Articles</title>
</head>

@section('content')

    <h1 class="stopBeingSoDifficult">Articles</h1>

    <div class="strengths">
           <h3>{{ $article->Title }}</h3>
            <p>{{ $article->Body }}</a></p>
        <button><a href="/articles/{{$article->id}}/edit">Edit</a></button>
    </div>
@endsection
