<section class="py-5" id="projects">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="text-center h1 my-4">{{$proyectos->nb_titulo}}</h2>
      <p class="px-5 mb-5 pb-3 lead blue-grey-text text-center">
        {{$proyectos->nb_sub_titulo}}
      </p>
       <p class="mt-1 text-right">
         <i class="mdi mdi-tag text-orange"></i> Actualizado el {{ $proyectos->updated_at }}
       </p>
    </div>
    <div class="row wow fadeInLeft" data-wow-delay=".3s">
      <div class="col-lg-6 col-xl-5 pr-lg-5 pb-5"><img class="img-fluid rounded z-depth-2" src="assets/img/enry.gif" alt="project image"/></div>
      <div class="col-lg-6 col-xl-7 pl-lg-5 pb-4">
        <div class="row mb-3">
          <?php foreach ($grupoProyectos as $key => $proyecto): ?>          
          <div class="col-1 mr-1"><i class="{{$proyecto->nb_icono}} fa-2x {{$proyecto->nb_icono_color}}"></i></div>
          <div class="col-10">
            <h5 class="font-bold">{{$proyecto->nb_titulo}}</h5>
            <p class="grey-text">
               {{$proyecto->nb_cuerpo}}
            </p>
          </div>
          <?php endforeach ?>
        </div>       
      </div>
    </div>
  </div>
</section>