 <div class="form-group mt-4">
  <div class= "form-group">
    {{ Form::label('nb_titulo', 'Título') }}
    {{ Form::text('nb_titulo', null, array('class' => 'form-control','placeholder'=>'Ingresa datos')) }}
 </div>
</div>
<div class="form-group">
  {{ Form::label('nu_precio', 'Precio') }}
  {{ Form::text('nu_precio', null, array('class' => 'form-control','placeholder'=>'Ingresa el precio')) }}
</div>
<div class="form-group">
  {{ Form::label('nu_precio', 'Colores') }}
  {{ Form::text('nb_color', null, array('class' => 'form-control','placeholder'=>'Ingresa el precio')) }}
</div>

<div class="form-group">
  {{ Form::label('nu_precio', 'Cobro del curso') }}
  {{ Form::text('nb_cobro_plan', null, array('class' => 'form-control','placeholder'=>'Ingresa el precio')) }}
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