@extends('layouts.common')
@section('content')

@extends('layouts.app')
@section('head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/calc2.css')}}">
@endsection('head')

@section('content')
    <div class='calc2'>
        <calc2-component></calc2-component>
        <div class='image'>
            <img class="img" src="/css/img/piero1.png">
        </div>
    </div>
@endsection

@endsection