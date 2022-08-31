@extends('layouts.app')
@section('content')
        <translator-component :languages='{{ json_encode($language)}}'></translator-component>
@endsection