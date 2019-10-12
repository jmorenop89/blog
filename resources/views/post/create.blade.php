@extends('layout.index')

@section('title')
    Agregar Publicación
@endsection

@section('content')
    <br><br>
    <form action="{{ route('post.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Titulo 
        <input type="text" name="title" id=""><br>
        Categoria
        <select name="category_id" id="">
            @foreach($categories as $category)
            <option value="{{ $category->id}}">
                {{ $category->name}}
            </option>
            @endforeach
        </select><br>
        Resumen<br>
        <textarea name="brief" cols="30" rows="10"></textarea><br>
        Contenido<br>
        <textarea name="content" cols="30" rows="10"></textarea><br>

        <input type="submit" value="Agregar">
    </form>
    <br><br>
@endsection