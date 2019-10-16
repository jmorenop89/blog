@extends('layout.index')

@section('title')
    Agregar Categoria
@endsection

@section('content')
    <br><br>
    {{ Form::open(['route'=>'category.store','method'=>'post']) }}
        @include('category.fields')
        {{ Form::submit('Agregar') }}
    {{ Form::close() }}
    <br><br>
@endsection