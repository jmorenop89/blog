@extends('layout.index')

@section('title')
    Editar Publicacion
@endsection

@section('content')
    <br><br>
    <form action="{{ route('post.update',$model->id) }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Titulo 
        <input type="text" name="title" id=""><br>
        Categoria
        <select name="category_id" id="">
            <option value=""></option>
        </select>
        Resumen
        <textarea name="brief" cols="30" rows="10"></textarea><br>
        Contenido
        <textarea name="content" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Agregar">
    </form>
    <br><br>
@endsection