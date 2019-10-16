@extends('layout.index')

@section('title')
    Lista de Categorias
@endsection

@section('content')
    <br><br>
    <a href="{{ route('category.create') }}">
        Agregar
    </a>
    <table border="1" width="100%">
        <tr>
            <th>Nombre</th>
            <th>slug</th>
            <th>Acciones</th>
        </tr>
        @foreach($models as $model)
        <tr>
            <td>{{ $model->name }}</td>
            <td>{{ $model->slug }}</td>
            <td>
                <a href="{{ route('category.edit',$model->id) }}">Editar</a>
                <a href="{{ route('category.delete',$model->id) }}">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    {{ $models->render() }}
    <br><br>
@endsection