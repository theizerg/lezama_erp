 <div class="form-group mt-4">
  <div class="form-group">
    {{ Form::label('nb_titulo', 'Título') }}
    {{ Form::text('nb_titulo', null, array('class' => 'form-control','placeholder'=>'Ingresa el título de ¿Quiénes somos?')) }}
 </div>
</div>
<div class="form-group">
  {{ Form::label('nb_cuerpo', 'Cuerpo') }}
  {{ Form::textarea('nb_cuerpo', null, array('class' => 'form-control','placeholder'=>'Ingresa el cuerpo de ¿Quiénes somos?')) }}
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