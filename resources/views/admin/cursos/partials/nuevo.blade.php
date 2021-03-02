
<div class="form-group">
  {{ Form::label('grupo_plan_id', 'Planes') }}
   {!! Form::select('grupo_plan_id', $planes, null,array('class' => 'form-control input-sm','placeholder'=>'Selecione los planes','id'=>'estado_id')) !!} 
</div>
<div class="form-group">
  {{ Form::label('tx_descripcion', 'Descripcion del curso') }}
   {{ Form::textarea('tx_descripcion', null, array('class' => 'form-control','placeholder'=>'Ingresa el sub título de la cabecera')) }}
</div>

<div class="form-group">
  <label for="status_id">¿Desea que el artículo sea publicado?</label>
  <div class="checkbox icheck">
    <label>
      <input type="radio" name="status_id" value="1" checked> Publicar&nbsp;&nbsp;
      <input type="radio" name="status_id" value="2"> No publicar
    </label>
  </div>
</div>