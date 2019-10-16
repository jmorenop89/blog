@extends('layout.index')

@section('title')
    Editar Categoria
@endsection

@section('content')
    <br><br>
    {{ Form::model($model,['route'=>['category.update',$model->id], 
        'method'=>'post'])}}
        @include('category.fields')
        {{ Form::submit('Actualizar') }}
    {{ Form::close() }}
    <br><br>
@endsection