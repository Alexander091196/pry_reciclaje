<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la marca', 'requerid']) !!}

</div>
<div class="form-group">
    {!! Form::label('description', 'Descripción') !!}

    {!! Form::textarea('description', null, [
        'class' => 'form-control',
        'placeholder' => 'Descripción de la marca',
    ]) !!}
</div>

<div class="form-group">
    <label for="logo">Seleccione una imagen</label><br>
    <input type="file" name="logo" accept="image/*">
</div>
