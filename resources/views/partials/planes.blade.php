<section class="text-center py-5 yellow-gradient-dark text-white" id="pricing">
  <div class="container">
    <div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3">{{$planes->nb_titulo}}</h2>
      <p class="px-5 mb-5 pb-3 lead">
       {{$planes->nb_sub_titulo}}
      </p>
      <p class="mt-1 mb-3 text-left">
         <i class="mdi mdi-tag text-orange"></i> Actualizado el {{ $planes->updated_at }}
        </p>
    </div>
    <div class="row wow zoomIn">
      <?php foreach ($grupoPlanes as $key => $value): ?>
      <div class="col-lg-4 col-md-12 mb-r">
        <div class="card card-image">
          <div class="text-white text-center pricing-card d-flex align-items-center {{$value->nb_color}} py-3 px-3 rounded">
            <div class="card-body">
              <div class="h5">{{$value->nb_titulo}}</div>
              <div class="py-5"><sup class="display-4">$</sup><span class="display-1">{{$value->nu_precio}}</span><span class="display-4">/{{$value->nb_cobro_plan}}</span></div>

             
              
               <ul class="list-unstyled">
                <?php foreach ($cursos as $key => $curso): ?>
                <li>
                  <p class="text-center">{{$value->tx_descripcion}}</p>
                </li>
               <?php endforeach ?>
              </ul>
            </div>
          </div>
        </div>
      </div> 
      <?php endforeach ?>    
    </div>
  </div>
</section>