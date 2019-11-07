@extends('layout.index')

@section('title')
    Agregar Categoria
@endsection

@section('content')
    <br><br>
    <div class="col-6">
        {{ Form::open(['route'=>'category.store','method'=>'post']) }}
            @include('category.fields')
            {{ Form::submit('Agregar') }}
        {{ Form::close() }}
    </div>
    
    <br><br>
@endsection