<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>一言日記を1日で終わらせよう</h1>
        <p>1日分の日記を埋めると夏休み中の一言日記が完成するよ</p>
        <form action='{{ route("diary.store") }}' method="POST">
            @csrf
            <div class="title">
                <h2>日記</h2>
                <input type="text" name="diary[text]" placeholder="内容"/>
                <p class="text__error" style="color:red">{{ $errors->first('diary.text') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <a href='{{ route("diaries") }}'>日記を表示する</a>
    </body>
</html>