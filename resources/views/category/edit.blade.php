@extends('layout.index')

@section('title')
    Editar Categoria
@endsection

@section('content')
    <br><br>
    <form action="{{ route('category.update',$model->id) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Nombre 
        <input type="text" name="name" 
            value="{{ $model->name}}"><br>
        <input type="submit" value="Agregar">
    </form>
    <br><br>
@endsection