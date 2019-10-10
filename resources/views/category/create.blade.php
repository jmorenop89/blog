@extends('layout.index')

@section('title')
    Agregar Categoria
@endsection

@section('content')
    <br><br>
    <form action="" method="post">
        Nombre 
        <input type="text" name="name" id=""><br>
        <input type="submit" value="Agregar">
    </form>
    <br><br>
@endsection