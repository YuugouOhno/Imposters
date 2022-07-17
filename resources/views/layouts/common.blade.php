<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{ asset('/CSS/common.css') }}">
    </head>
    <body>
        @yield('content')
        <!-- <script src="{{ mix('js/app.js') }}"></script> -->
    </body>
    <header>
            <nav class="gnav">
                <ul class="menu">
                    <li><a href="/">トップページ</a></li>
                    <li><a href="/diary/create">一日日記</a></li>
                    <li><a href="/math">電卓</a></li>
                    <li><a href="/translator">翻訳</a></li>
                </ul>
            </nav>
    </header>
    
    
</html>