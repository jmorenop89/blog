@extends('layout.index')

@section('title')
    Agregar Categoria
@endsection

@section('content')
    <br><br>
    <form action="{{ route('category.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Nombre 
        <input type="text" name="name" id=""><br>
        <input type="submit" value="Agregar">
    </form>
    <br><br>
@endsection