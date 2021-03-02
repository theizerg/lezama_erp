<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="Material design landing page template built by TemplateFlip.com"/>
    <link rel="stylesheet" href="{{ asset('iconfont/material-icons.css') }}">
    <link href="{{asset('css/apps.css')}}" rel="stylesheet">
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('styles/main.css')}}" rel="stylesheet">

    <style>
    .blue-gradient-dark
      {
        background:linear-gradient(to right,#2B89D2,#0C59A7,#085E90);
       }

    .yellow-gradient-dark{
      background:linear-gradient(to right,#111010,#dfac2d,#111010 );
    }

    .hm-gradient .full-bg-img
     {
      background: rgba(42, 27, 120, 0.7);
      background:linear-gradient(45deg,to left,#bc890c,#dfac2d,#f9c94b,50%);
     }

    @media (max-width: 450px)
     {
      .margins {
        margin-right: 1rem;
        margin-left: 1rem;
      }
    }

  #pricing .lead 
  {
    opacity: 0.7;
  }

  #pricing .card-image
   {
    background: url("../assets/img/tocando-juan.gif") no-repeat center center;
   }

  #pricing ul li 
  {
    font-size: 1.1em;
  }

   .yellow-rgb-darken{
    background-color: rgba(206, 180, 4, 0.7);
   }

   .gray-rgb-darken{
    background-color: rgba(130, 124, 124, 0.7);
   }

   .rgba-blue-strong,
.rgba-blue-strong:after {
  background-color: rgba(3, 4, 45, 0.4);
}

    .top-nav-collapse 
    {
       background:linear-gradient(to right,#111010,#282323,#332F2F,#3F3C3C );
    }

    .navbar:not(.top-nav-collapse)
     {
        background: transparent !important;
      }

    @media (max-width: 768px)
     {
        .navbar:not(.top-nav-collapse) {
        background: #bc890c !important;
      }
    }
      
.ver {
        overflow: hidden;
        position: relative;
        cursor: default; 
        height: 100%;
        background-attachment: fixed; 
        width: 100%;
        height: 100%;
        position: absolute;
        overflow: hidden;
        top: 0;
        left: 0;
        display: block;
        position: relative;
   }

#pricing .lead {
  opacity: 0.7;
}

#pricing .card-image {
  background: url("../assets/img/tocando-juan.gif") no-repeat center center;
}

#pricing ul li {
  font-size: 1.1em;
}


/*Estilos del banner*/
.banner{
  
  background-position: center;
  background-image: url('../assets/img/tocando-juan.gif');
  background-size: cover;
  animation: banner 15s infinite linear;

}
.banner-body{
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  height: 800%;
  color: #FFF;
  font-family: 'poppinsregular';
  text-align: center;
   margin-top: margin-top: 3rem !important;
}
.banner::before{
  content    : "";
  background : #000000; 
  position   : absolute;
  width      : 100%;
  height     : 100%;
  opacity    : 0.4; 
}
@keyframes banner{
  0%{
    background-image: url('../assets/img/tocando-juan.gif');
  }
  33%{
    background-image: url('../assets/img/tocando-juan.gif');
  }


  34%{
    background-image: url('../assets/img/tocando-enry.gif');
  }
  66%{
    background-image: url('../assets/img/tocando-enry.gif');
  }


  67%{
    background-image: url('../assets/img/tocando-renato.jpg');
  }
  100%{
    background-image: url('../assets/img/tocando-renato.jpg');
  }

}


    </style>  
  
</head>
<body>
  <div id="top">
    <header>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
        <div class="container"><a class="navbar-brand" href="#"> <img src="./assets/img/logo.png" width="40"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link active" href="#about">Nosotros</a></li>
              <li class="nav-item"><a class="nav-link" href="#projects">Cursos</a></li>
              <li class="nav-item"><a class="nav-link" href="#pricing">Precios</a></li>
              <li class="nav-item"><a class="nav-link" href="#team">Equipo</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact">Contáctanos</a></li>
              @guest
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Ingresar</a></li>
                <li class="nav-item"><a href="#formFamiliaProducto" class=" nav-link" data-toggle="modal" data-target="#formFamiliaProducto">Regístrate</a></li>
              @else
                 <li class="nav-item"> <a href="bag.html" class="nav-link" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Carrito de compras" >Carrito de compras
              <i class="fas fa-shopping-bag text-white"></i>
              <span class="badge bg-warning rounded-pill bag-count" >2</span>
              @endguest
              
          </a></li>
            </ul>
          </div>
        </div>
      </nav> 
      <!-- Intro Section-->
      <section class="ver hm-gradient banner">
        <div class="full-bg-img d-flex align-items-center">
          <div class="container"><br><br><br><br><br><br><br><br><br>

            <div class="row no-gutters">
              <div class="col-md-12 col-lg-6 text-center text-md-left margins">
                <div class="white-text">
                  <div class="wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 class="h1-responsive font-bold mt-sm-5">{{$encabezado->nb_titulo}} </h1>
                    <div class="h6-responsive">
                      {{$encabezado->nb_sub_titulo}}
                    </div>
                    <p class="mt-3 text-center">
                     <i class="mdi mdi-tag text-orange"></i> Actualizado el {{ $encabezado->updated_at }}
                    </p>
                  </div><br>
                  <div class="wow fadeInLeft" data-wow-delay="0.3s"><a class="btn btn-white dark-grey-text font-bold ml-0" href="https://www.youtube.com/watch?v=60ItHLz5WEA" target="_blank"><i class="fa fa-play mr-1"></i> Ve nuestro demo</a>
                  </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
        
    <div id="content">
        @yield('content')
    </div>

     <footer class="page-footer yellow darken-2 center-on-small-only pt-0 mt-0">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mb-5 flex-center"><a class="px-3"><i class="mdi mdi-facebook fa-lg white-text"></i></a><a class="px-3"><i class="mdi mdi-twitter fa-lg white-text"></i></a><a class="px-3"><i class="mdi mdi-google-plus fa-lg white-text"></i></a><a class="px-3"><i class="mdi mdi-linkedin fa-lg white-text"></i></a></div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container-fluid">
          <p>&copy; <a href="/">Material Landing</a> - Design: <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></p>
        </div>
      </div>
    </footer>
    </div>
    @include('partials.registro')
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
    <script>new WOW().init();</script>
</body>
</html>
