@extends('layouts.admin')

@section('title', 'Grupo planes')
@section('page_title', 'Grupo planes')
@section('page_subtitle', 'Editar datos')

@section('breadcrumb')
    @parent
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="{{ url('encabezado') }}">Pastor</a></li>
    <li class="active">Ingresar</li>
@endsection

@section('content')

  <section class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="btn-group">
          
          <a href="{{ url('planesCuadros') }}" class="btn blue darken-4 text-white"><i class="fas fa-sort-alpha-down-alt"></i> Listado</a>  
         
          <a href="{{ url('planesCuadros/create') }}" class="btn blue darken-4 text-white"><i class="fa fa-plus-square"></i> Ingresar</a>
          
        </div>
      </div>
    </div>
    <br>

  <div class="row">
      <div class="col-md-12">
        <div class="card ">

        <div class="card-body">
          <ul class="list-inline">
                   <li class="list-inline-item">
                      <a href="/" class="link_ruta">
                        Inicio &nbsp; &nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>
                      </a>
                    </li>
                   <li class="list-inline-item">
                      <a href="/planesCuadros" class="link_ruta">
                        Listado &nbsp; &nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>
                      </a>
                    </li>
                   <li class="list-inline-item">
                      <a href="/planesCuadros/create" class="link_ruta">
                        Nuevo
                      </a>
                    </li>
                  </ul><br>
          
                  {!!Form::model($encabezado,['method'=>'PUT','route'=>['planesCuadros.update',$encabezado->encode_id],'id'=>'encabezado_form'])!!} 
                        
                
                @include('admin.planesCuadro.partials.nuevo') 
                        
            <div class="box-footer">
              <button type="submit" class="btn btn-primary ajax" id="encabezado_button">
                <i id="ajax-icon" class="fa fa-save"></i> Guardar
              </button>
            </div>

          {!! Form::close()!!}
         
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
@endpush
