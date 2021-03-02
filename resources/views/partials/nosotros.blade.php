<section class="text-center py-5 grey lighten-4" id="about">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3">{{$somos->nb_titulo}} </h2>
      <p class="px-5 mb-5 pb-3 lead blue-grey-text">
        {{$somos->nb_cuerpo}}
      </p>
       <p class="mt-2 text-left">
         <i class="mdi mdi-tag text-orange"></i> Actualizado el {{ $somos->updated_at }}
        </p>
    </div>
    <div class="row">
       <?php foreach ($cuadros as $key => $cuadro): ?>
      <div class="col-md-4 mb-r wow fadeInUp" data-wow-delay=".3s"><i class="{{$cuadro->nb_icono}} fa-3x {{$cuadro->nb_icono_color}}"></i>
        <h3 class="h4 mt-3">{{$cuadro->nb_titulo}}</h3>
        <p class="mt-3 blue-grey-text">
         {{$cuadro->nb_cuerpo}}
        </p>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
