@extends('layouts.admin')

@section('title', 'Proyectos')
@section('page_title', 'Proyectos')
@section('page_subtitle', 'Ingresar')

@section('breadcrumb')
    @parent
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="{{ url('user') }}">usuarios</a></li>
    <li class="active">Ingresar</li>
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="btn-group">
          <a href="{{ url('proyectos') }}" class="btn blue darken-4 text-white"><i class="fas fa-sort-alpha-down-alt"></i> Listado</a>         
          <a href="{{ url('proyectos/create') }}" class="btn blue darken-4 text-white"><i class="fa fa-plus-square"></i> Ingresar</a>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
         <div class="card-header  outline-primary blue-gradient-dark text-white">
              <h3 class="card-title">Agregar nuevo proyecto</h3>
             
            </div>
           {!!Form::open (['route'=>'proyectos.store','id'=>'postulados_form'])!!}
            <div class="card-body">
              <ul class="list-inline">
                   <li class="list-inline-item">
                      <a href="/home" class="link_ruta">
                        Inicio &nbsp; &nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>
                      </a>
                    </li>
                   <li class="list-inline-item">
                      <a href="/proyectos" class="link_ruta">
                        Listado &nbsp; &nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>
                      </a>
                    </li>
                   <li class="list-inline-item">
                      <a href="/proyectos/create" class="link_ruta">
                        Nuevo
                      </a>
                    </li>
                  </ul><br>
                @include('admin.proyectos.partials.nuevo')
            </div>
            <div class="card-footer">
              <button type="submit" class="btn blue darken-4 text-white ajax" id="submit">
                <i id="ajax-icon" class="fa fa-save"></i> Ingresar
              </button>
             
            </div>
          {!! Form::close()!!}
        </div>
      </div>
    </div>
  </div>

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
    <script src="{{ asset('js/admin/user/create.js') }}"></script>
@endpush
