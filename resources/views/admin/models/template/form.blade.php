<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del modelo', 'requerid']) !!}
</div>

<div class="form-group">
    {!! Form::label('brand_id', 'Marca') !!}
    {!! Form::select('brand_id', $brands, null, ['class' => 'form-control', 'requerid']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Descripción') !!}

    {!! Form::textarea('description', null, [
        'class' => 'form-control',
        'placeholder' => 'Descripción del modelo',
    ]) !!}
</div>
