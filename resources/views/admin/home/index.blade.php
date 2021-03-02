@extends('layouts.admin')

@section('title', 'Inicio')
@section('page_title', 'Inicio')
@section('page_subtitle', 'Sistema automatizado para el control interno de pastores y extensiones')

@section('breadcrumb')
    @parent
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Principal</li>
@endsection

@section('content')
   <div class="container">
      <div class="row">
          <div class="col-lg-3 col-xs-3">
            <!-- small box -->
            <div class="small-box blue-gradient-dark text-white">
              <div class="inner">
                <h3>Total</h3>
                <p>Usuarios ( {{$usuarios}} )</p>
              </div>
            </div>
          </div>
       
          <div class="col-lg-3 col-xs-3">
            <!-- small box -->
            <div class="small-box red-gradient-dark text-white">
              <div class="inner">
                <h3>Total</h3>
                <p>Categorías ( {{$categorias}} )</p>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-3">
            <!-- small box -->
            <div class="small-box green-gradient-dark text-white">
              <div class="inner">
                <h3>Total</h3>
                <p>Etiquetas ( {{$etiquetas}} )</p>
              </div>
            </div>
        </div>
     </div>
 </div>

@endsection

