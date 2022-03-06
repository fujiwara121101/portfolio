<!DOCTYPE HTML>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Store</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>店舗情報</h1>
        </form>
        [<a href='/stores/create'>create</a>]
        <div class='stores'>
            @foreach ($stores as $store)
                <div class='store'>
                    <a href="/stores/{{ $store->id }}"><h2>{{ $store->name }}</h2></a>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $stores->links() }}
        </div>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>
@endsection