<div class="form-group">
    {{ Form::label('name','Nombre') }}
    {{ Form::text('name',null,['class'=>'form-control']) }}
    @error('name')
    <div class="invalid-feedback d-block">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="form-group">
    {{ Form::label('slug','Slug') }}
    {{ Form::text('slug',null,['class'=>'form-control']) }}
</div>