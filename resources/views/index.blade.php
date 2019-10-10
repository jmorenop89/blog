@extends('layout.index')

@section('title')
    Laravel - Inicio
@endsection

@section('content')
<div>
    <h3>Hola</h3>
    <p>Bienvenidos a mi pagina de inicio</p>
    
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Slug</th>
        </tr>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->name}}</td>
            <td>{{ $category->slug }}</td>
        </tr>
        @endforeach
    </table>

   
    
    

</div>
@endsection