<!-- Modal alerts -->
	<div class="modal fade" id="formFamiliaProducto" tabindex="-1" role="dialog" aria-labelledby="formFamiliaProductoLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	      	<center><h4>Regístro de usuario </h4></center>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form class="form"  method="POST" action="{{ route('register') }}">
			{{ csrf_field() }}
			<meta name="csrf-token" content="{{ csrf_token() }}">			
				<div class="modal-body list-group">
					<div class="row">
						<div class="col-md-12 col-md-offset-2">
							<fieldset>
								<div class="form-group text-center">
								 <div class="row">
								 	 <div class="col-md-12">
					                    <div class="md-form">
					                      <input class="form-control" id="name"  placeholder="" type="text" name="name" required="required"/>
					                      <label for="name">Tu nombre</label>
					                    </div>
					                  </div>
					                  <div class="col-md-12">
					                    <div class="md-form">
					                      <input class="form-control" id="name"  placeholder="" type="text" name="last_name" required="required"/>
					                      <label for="name">Tu apellido</label>
					                    </div>
					                  </div>
								    </div>	
								</div>
							</fieldset>
							<div class="form-group">
								<input class="btn blue darken-4 text-white btn-block" type="submit" name="" value="Guardar">
							</div>
						</div>
					</div>
				</div>				
			</form>
		</div>
	</div>
</div>