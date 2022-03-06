<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Manner</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>マナー集</h1>
        <div class='manners'>
            @foreach($manners as $manner)    
                <div class='manners'>
                    <a href="/manners/{{ $manner->id }}"><h2>{{ $manner->title}}</h2></a>
                </div>
            @endforeach
        </div>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>
@endsection

