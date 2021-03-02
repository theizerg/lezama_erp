<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermisosTableSeeder extends Seeder
{
   private $permissions_super_administrador, $permissions_administrador , $estudiante_permissions;


    public function __construct()
    {
        /*
        set the default permissions
        */

         $this->permissions_super_administrador =  [
                                 /* Usuarios */
                                'VerUsuario',
                                'RegistrarUsuario',
                                'EditarUsuario',
                                'EliminarUsuario',
                                /* Roles */
                                'CrearRol',
                                'VerRol',
                                'EditarRol',
                                'EliminarRol',
                                /* Permisos */
                                'VerPermisos',
                                'CrearPermisos',
                                'EditarPermisos',
                                'EliminarPermisos',
                                /* Cabecera */
                                'VerCabecera',
                                'CrearCabecera',
                                'EditarCabecera',
                                'EliminarCabecera',
                                /* Nosotros */
                                'VerNosotros',
                                'CrearNosotros',
                                'EditarNosotros',
                                'EliminarNosotros',
                                /* Equipos */
                                'VerEquipos',
                                'CrearEquipos',
                                'EditarEquipos',
                                'EliminarEquipos',
                                /* Promociones */
                                'VerPromociones',
                                'CrearPromociones',
                                'EditarPromociones',
                                'EliminarPromociones',
                                /* Cursos */
                                'VerCursos',
                                'CrearCursos',
                                'EditarCursos',
                                'EliminarCursos',
                                /* Contactanos|| */
                                'VerContactanos',
                                'CrearContactanos',
                                'EditarContactanos',
                                'EliminarContactanos',

                                /* Proyectos */
                                'VerProyectos',
                                'CrearProyectos',
                                'EditarProyectos',
                                'EliminarProyectos',
                              ];

        $this->permissions_administrador =  [
                                /* Cabecera */
                                'VerCabecera',
                                'CrearCabecera',
                                'EditarCabecera',
                                'EliminarCabecera',
                                /* Nosotros */
                                'VerNosotros',
                                'CrearNosotros',
                                'EditarNosotros',
                                'EliminarNosotros',
                                /* Equipos */
                                'VerEquipos',
                                'CrearEquipos',
                                'EditarEquipos',
                                'EliminarEquipos',
                                /* Promociones */
                                'VerPromociones',
                                'CrearPromociones',
                                'EditarPromociones',
                                'EliminarPromociones',
                                /* Cursos */
                                'VerCursos',
                                'CrearCursos',
                                'EditarCursos',
                                'EliminarCursos',
                                /* Contactanos|| */
                                'VerContactanos',
                                'CrearContactanos',
                                'EditarContactanos',
                                'EliminarContactanos',
                                /* Proyectos */
                                'VerProyectos',
                                'CrearProyectos',
                                'EditarProyectos',
                                'EliminarProyectos',
                              ];


        /*
        set the permissions for the user role, by default
        role admin we will assign all the permissions
        */
        $this->estudiante_permissions = [
                             /* Usuarios */
                                'VerUsuario',

                                    ];
        
    }




    public function run()
	  {
    	  // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        foreach ($this->permissions_super_administrador as $permission)
        {
            Permission::create(['name' => $permission]);
        }



        // create the admin role and set all default permissions

        // create the admin role and set all default permissions
        $role = Role::create(['name' => 'Súper Administrador']);
        $role->givePermissionTo($this->permissions_super_administrador);

        $role = Role::create(['name' => 'Administrador']);
        $role->givePermissionTo($this->permissions_administrador);

        // create the user role and set all user permissions
        $role = Role::create(['name' => 'Usuario']);
        $role->givePermissionTo($this->estudiante_permissions);

    }
}
