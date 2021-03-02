@extends('layouts.admin')

@section('title', 'Planes')
@section('page_title', 'Planes')
@section('page_subtitle', 'Editar datos')

@section('breadcrumb')
    @parent
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="{{ url('proyectos') }}">Pastor</a></li>
    <li class="active">Ingresar</li>
@endsection

@section('content')

  <section class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="btn-group">
          
          <a href="{{ url('planes') }}" class="btn blue darken-4 text-white"><i class="fas fa-sort-alpha-down-alt"></i> Listado</a>  
         
          <a href="{{ url('planes/create') }}" class="btn blue darken-4 text-white"><i class="fa fa-plus-square"></i> Ingresar</a>
          
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
                      <a href="/planes" class="link_ruta">
                        Listado &nbsp; &nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>
                      </a>
                    </li>
                   <li class="list-inline-item">
                      <a href="/planes/create" class="link_ruta">
                        Nuevo
                      </a>
                    </li>
                  </ul><br>
          
         {!!Form::model($encabezado,['method'=>'PUT','route'=>['planes.update',$encabezado->encode_id],'id'=>'encabezado_form'])!!} 
                        
                
                @include('admin.planes.partials.nuevo') 
                        
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
