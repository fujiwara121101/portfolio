<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Store_show</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="name">
            店名　{{ $store->name }}
        </h1>
        <h1 class="adress">
            住所　{{ $store->adress }}
        </h1>
        <h1 class="url">
            URL　{{ $store->url }}
        </h1>
        <h1 class="recommend_point">
            初心者おすすめ度　{{ $store->recommend_point }}
        </h1>
        <p class="edit">[<a href="/stores/{{ $store->id }}/edit">edit</a>]</p>
        <form action="/stores/{{ $store->id }}" id="form_delete" method="post">
            {{csrf_field()}}
            {{method_field('delete')}}
            <input type="submit" style="display:none">
            <p class='delete'>[<span onclick="return deletePost(this);">delete</span>]</p>
        </form>
        <div class="footer">
            <a href="/stores">戻る</a>
        </div>
        <script>
            function deletePost(e){
                'use strict';
                if(confirm('本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
</html>