<h6 class="text-center">
        Datos personales
      </h6><br>
 <div class="row">
      <div class="col-sm-6">
         <div class="form-group">
          <label>Nombres</label>
            {{ Form:: text('name',null,['class'=>'form-control','placeholder' => 'Nombres','id'=>'name']) }}
             <input name="users_id" type="hidden" value=" {{ auth()->user()->id}}" id="users_id">
             @if ($errors->has('name'))
             <span class="red-text">
                 <strong>{{ $errors->first('name') }}</strong>
             </span>
         @endif
          </div>
      </div> 
      <div class="col-sm-6">
        <label>Apellidos</label>
        <div class="form-group">
          {{ Form:: text('last_name',null,['class'=>'form-control','placeholder' => 'Apellidos','id'=>'last_name']) }}        
          @if ($errors->has('last_name'))
          <span class="red-text">
              <strong>{{ $errors->first('last_name') }}</strong>
          </span>
           @endif
        </div> 
   </div> 
    <div class="col-sm-6">
        <label>Opcupación</label>
        <div class="form-group">
          {{ Form:: text('ocupacion',null,['class'=>'form-control','placeholder' => 'Opcupación','id'=>'ocupacion']) }}        
          @if ($errors->has('ocupacion'))
          <span class="red-text">
              <strong>{{ $errors->first('ocupacion') }}</strong>
          </span>
           @endif
        </div> 
   </div> 
    <div class="col-sm-6">
        <label>Usuario de red social</label>
        <div class="form-group">
          {{ Form:: text('red_social',null,['class'=>'form-control','placeholder' => 'Usuario de red social','id'=>'red_social']) }}        
          @if ($errors->has('red_social'))
          <span class="red-text">
              <strong>{{ $errors->first('red_social') }}</strong>
          </span>
           @endif
        </div> 
   </div> 
   <div class="col-sm-6">
        <label>Aparición de los datos</label>
        <div class="form-group">
          {{ Form:: text('movimiento',null,['class'=>'form-control','placeholder' => 'Aparición de los datos','id'=>'movimiento']) }}        
          @if ($errors->has('movimiento'))
          <span class="red-text">
              <strong>{{ $errors->first('movimiento') }}</strong>
          </span>
           @endif
        </div> 
   </div> 
    <div class="col-sm-6">
        <div class="form-group">
          <label>Foto</label><br>
          {{ Form:: file('photo',null,['class'=>'form-control','placeholder' => 'Photo','id'=>'photo']) }}  
          @if ($errors->has('photo'))
          <span class="red-text">
              <strong>{{ $errors->first('photo') }}</strong>
          </span>
           @endif     
      </div> 
    </div>
    <div class="col-sm-12">
      <div class="form-group">
        <label>Reseña</label><br>
        {{ Form:: textarea('tx_resena',null,['class'=>'form-control','placeholder' => 'Ingresar la reseña','id'=>'photo']) }}  
        @if ($errors->has('tx_resena'))
        <span class="red-text">
            <strong>{{ $errors->first('tx_resena') }}</strong>
        </span>
         @endif     
    </div> 
  </div>
<div class="col-sm-12 text-center"><br>
  <div class="form-group">
    <label for="status_id">¿Desea que el artículo sea publicado?</label>
    <div class="checkbox icheck">
      <label>
        <input type="radio" name="status_id" value="1" checked> Publicar&nbsp;&nbsp;
        <input type="radio" name="status_id" value="2"> No publicar
      </label><br>
      @if ($errors->has('status_id'))
      <span class="red-text">
          <strong>{{ $errors->first('status_id') }}</strong>
      </span>
       @endif
    </div>
  </div>
</div>