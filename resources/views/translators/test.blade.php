@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="{{asset('/css/test.css')}}">
@endsection

@section('content')
        <translator-component :languages='{{ json_encode($language)}}'></translator-component>
@endsection