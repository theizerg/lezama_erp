 <!-- Brand Logo -->
   
     <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('images/user/user1-128x128.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('/') }}" class="d-block text-center"> {{ Auth::user()->full_name }}</a>
          <small class="text-center text-white ml-5">
            {{ Auth::user()->hasrole('Administrador') ? 'Administrador' : 'Usuario' }}
          </small><br>
          <small class="text-white">
            Miembro desde el año {{ Auth::user()->created_at->format('Y') }}</small>
        </div>
      </div>
     <nav class="mt-2">
     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
      <li class="nav-header text-center">OPCIONES</li>
      <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-cogs"></i>
          <p>
            Administración
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        @can('VerPermisos')
          <ul class="nav nav-treeview">
           <li class="nav-item has-treeview">
            
            <a href="#" class="nav-link active">
              <i class="nav-icon material-icons">format_list_bulleted</i>
              <p>
                Permisos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              @foreach ($roles as $role)

              <li class="nav-item">
                <a href="/permission/{{ $role->name }}" class="nav-link">
                  <i class="fas fa-clipboard-list nav-icon"></i>
                  <p>{{ $role->name }}</p>
                </a>
              </li>
             @endforeach
           </ul>
          </li>
        </ul>
       @endcan
       @can('VerUsuario')
       <ul class="nav nav-treeview">
         <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
            <i class="nav-icon material-icons">person</i>
            <p>
              Usuarios
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/user" class="nav-link">
                  <i class="far fa-file nav-icon"></i>
                  <p>Mostrar datos</p>
                </a>
              </li>
            @can('RegistrarUsuario')
               <li class="nav-item">
                <a href="/user/create" class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Crear usuario</p>
                </a>
              </li>
            </ul>
            @endcan
          </li>
        </ul>
       @endcan
        @can('VerRol')
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-lock nav-icon"></i>
            <p>
              Roles
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @can('CrearRol')
            <li class="nav-item">
              <a href="/roles/create" class="nav-link">
                <i class="far fa-plus-square nav-icon"></i>
                <p>Agregar rol</p>
              </a>
            </li>
          @endcan

             <li class="nav-item">
              <a href="/roles" class="nav-link">
                <i class="fas fa-clipboard-list nav-icon"></i>
                <p>Vista general</p>
              </a>
            </li>
          </ul>
        </li>
      @endcan
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-sign-in-alt nav-icon"></i>
          <p>
            Logins
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
           <li class="nav-item">
            <a href="/logins" class="nav-link">
              <i class="fas fa-clipboard-list nav-icon"></i>
              <p>Vista general</p>
            </a>
          </li>
        </ul>
       </li>
       <li class="nav-header text-center">DIRECTORIO</li>
       <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon mdi mdi-page-layout-header nav-icon"></i>
          <p>
            ENCABEZADO
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
           <li class="nav-item">
            <a href="/encabezado" class="nav-link">
              <i class="fas fa-clipboard-list nav-icon"></i>
              <p>Vista general</p>
            </a>
          </li>
        </ul>
       </li>
       <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-users nav-icon"></i>
          <p>
            QUIENES SOMOS
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
           <li class="nav-item">
            <a href="/somos" class="nav-link">
              <i class="fas fa-clipboard-list nav-icon"></i>
              <p>Vista general</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/somosCuadros" class="nav-link">
              <i class="fas fa-user nav-icon"></i>
              <p>Grupo somos</p>
            </a>
          </li>
        </ul>
       </li>
       <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon mdi mdi-table nav-icon"></i>
          <p>
            PROYECTOS
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
           <li class="nav-item">
            <a href="/proyectos" class="nav-link">
              <i class="fas fa-clipboard-list nav-icon"></i>
              <p>Vista general</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/proyectosCuadros" class="nav-link">
              <i class="mdi mdi-list-status nav-icon"></i>
              <p>Grupo proyectos</p>
            </a>
          </li>
        </ul>
       </li>
       <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-user-tie nav-icon"></i>
          <p>
            PLANES
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
           <li class="nav-item">
            <a href="/planes" class="nav-link">
              <i class="fas fa-clipboard-list nav-icon"></i>
              <p>Vista general</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/planesCuadros" class="nav-link">
              <i class="mdi mdi-list-status nav-icon"></i>
              <p>Grupo planes</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon mdi mdi-keyboard nav-icon"></i>
          <p>
            Cursos
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
           <li class="nav-item">
            <a href="/cursos" class="nav-link">
              <i class="fas fa-clipboard-list nav-icon"></i>
              <p>Vista general</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/cursos/create" class="nav-link">
              <i class="mdi mdi-check-all nav-icon"></i>
              <p>Agregar cursos</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-users nav-icon"></i>
          <p>
            Equipo
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
           <li class="nav-item">
            <a href="/equipo" class="nav-link">
              <i class="fas fa-clipboard-list nav-icon"></i>
              <p>Vista general</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/desgloce" class="nav-link">
              <i class="mdi mdi-check-all nav-icon"></i>
              <p>Agregar miembros</p>
            </a>
          </li>
        </ul>
      </li>
    </li>
  </ul>
</nav>
</div>