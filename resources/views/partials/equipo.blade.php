<section class="py-5" id="team">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3 text-center">{{$equipos->nb_titulo}} </h2>
      <p class="px-5 mb-5 pb-3 lead text-center blue-grey-text">
        {{$equipos->nb_sub_titulo}}
      </p>
    </div>
    <div class="row mb-lg-4 center-on-small-only">
      @foreach ($desgEquipos as $item)
      <div class="col-lg-6 col-md-12 mb-r wow {{$item->movimiento}}" data-wow-delay=".3s">
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{('storage/equipo/'.$item->photo)}}  " alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h4">{{$item->display_name}} </div>
          <h6 class="font-bold blue-grey-text mb-4">{{$item->ocupacion}} </h6>
          <p class="grey-text">{{$item->tx_resena}} </p><a href="https://instagram.com/{{$item->red_social}}" target="_blank"><i class="mdi mdi-instagram"></i><span class="ml-1">@ {{$item->red_social}}</span></a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>