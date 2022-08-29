@extends('layouts.app')
@section('content')
        <translator-component :language='{{ json_encode($language)}}'></translator-component>
@endsection