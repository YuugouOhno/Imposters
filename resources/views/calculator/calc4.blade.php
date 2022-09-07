@extends('layouts.app')
@section('head')
 <  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/calc4.css')}}">
@endsection
@section('content')
    <calc4-component></calc4-component>
@endsection