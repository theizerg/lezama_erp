    @extends('layouts.admin')

    @section('title', 'Encabezado')
    @section('page_title', 'Encabezado')
    @section('page_subtitle', 'Listado')

    @section('breadcrumb')
        @parent
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ url('user') }}">usuarios</a></li>
        <li class="active">Listado</li>
    @endsection

    @section('content')
     <div class="container">
        @can('CrearCabecera')
        <div class="row">
            <div class="col-md-6">
                <div class="btn-group">
                <a href="{{ url('encabezado/create') }}" class="btn text-white  blue darken-4 "><i class="fa fa-plus-square"></i> Ingresar</a>
                </div>
            </div>
            </div>
             @endcan
        <br>
        <div class="card card-danger ">
          <div class="card-header blue-gradient-dark text-white outline-primary ">
              <h3 class="card-title">Listado de encabezado</h3>
          </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <ul class="list-inline">
                   <li class="list-inline-item">
                      <a href="/home" class="link_ruta">
                        Inicio &nbsp; &nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul><br>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                    <tr>
                    <th>Título</th>
                    <th>Cuerpo</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    @foreach ($cabeceras as $encabezado)
                    <td>{{ $encabezado->nb_titulo }}</td>
                    <td>{{ $encabezado->nb_sub_titulo }}</td>
                    <td>{{ $encabezado->fecha }}</td>
                    <td><span class="badge fa-1x  elevation-2 text-white fa-1x {{ $encabezado->status_id ? 'green' : 'red' }}">{{ $encabezado->display_status }}</span></td>
                     <td>
                     <a class="btn btn-round blue darken-4" href="{{ url('encabezado', [$encabezado->encode_id,'edit']) }}"><i class="material-icons" style="color: white;">edit</i> </a>
                     </tr>
                    @endforeach
                    </tr>
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>

</div>
<div class="modal fade" id="confirm-delete" tabindex="-1"
         role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                </div>
                <div class="modal-body">
                    <p>¿Seguro que desea eliminar este
                        registro?</p>
                    <p class="nombre"></p>
                </div>
                <div class="modal-footer">
                    <form class="form-inline form-delete"
                          role="form"
                          method="POST"
                          action="">
                        {!! method_field('DELETE') !!}
                        {!! csrf_field() !!}
                        <button type="button"
                                class="btn btn-default"
                                data-dismiss="modal">Cancelar
                        </button>

                            <button id="delete-btn"
                                    class="btn btn-danger"
                                    title="Eliminar">Eliminar
                            </button>

                    </form>
                </div>
            </div>
        </div>
    </div>



    @endsection
