@extends('layout.index')

@section('title')
    Lista de Publicaciones
@endsection

@section('content')
    <br><br>
    <a href="{{ route('post.create') }}">
        Agregar
    </a>
    <table border="1">
        <tr>
            <th>titulo</th>
            <th>Categoria</th>
            <th>Acciones</th>
        </tr>
        @foreach($models as $model)
        <tr>
            <td>{{ $model->title }}</td>
            <td>{{ $model->category->name }}</td>
            <td>
                <a href="{{ route('post.edit',$model->id) }}">Editar</a>
                <a href="{{ route('post.delete',$model->id) }}">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br><br>
@endsection