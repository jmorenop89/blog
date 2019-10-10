@extends('layout.index')

@section('title')
    Laravel - Nosotros
@endsection

@section('content')
<div>
    <h3>CodiGo</h3>
    <p>Bienvenidos a mi pagina de nosotros</p>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Slug</th>
        </tr>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->slug }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection