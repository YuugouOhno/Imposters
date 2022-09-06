<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
        <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
    </head>
    <body>
        @yield('content')
        <!-- <script src="{{ mix('js/app.js') }}"></script> -->
    </body>
    <header>
            <nav class="gnav">
                <ul class="menu">
                    <li><a style="text-decoration: none; color:red;" href="/">トップページ</a></li>
                    <li><a style="text-decoration: none; color:orange;" href="/diary/create">一言日記</a></li>
                    <li><a style="text-decoration: none; color:#65ab31" href="/calculator">電卓</a></li>
                    <li><a style="text-decoration: none; color:#00bfff;" href="/translator">翻訳</a></li>
                </ul>
            </nav>
    </header>
    
    
</html>