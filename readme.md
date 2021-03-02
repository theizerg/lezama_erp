# Sistema de inventario y control de facturas

**Sistema de inventario y control de facturas** es mi “personal pre.built" desarrollado haciendo uso de **Laravel 5.5** y la plantilla **AdminLTE** basada en Bootstrap 3,  para ser usada como base inicial en proyectos que necesitan el desarrollo de un panel de control o administrativo con gestión de usuarios con roles y permisos.

El desarrollo  integra el sistema de autentificación por defecto de Laravel, y el uso del paquete spatie/laravel-permission cubriendo en la mayor medida:

- CRUD de usuarios
- Asignación de roles
- Asignación de permisos a roles
- Habilitar/deshabilitar acceso al usuario
- Recuperación de contraseña por correo electrónico
- Registro y listado de productos ingresados al inventario
- Registro de movimiento del producto por concepto de facturas u otro movimiento
- Registro y listado de comprobantes, donde se especifica su tipo y genera una factura y recibo de pago, estableciendo la fecha de vencimiento del mismo la deuda a cancelar, el dinero abonado y lo que debe el cliente.
- Registro y listado de gastos generados en el establecimiento
- Registro y listado de los clientes asociados, colocando su identificación, razón social o RIF
- Registro y listado de todos los proveedores que están asociados
- Registro, listado y movimiento de los empleados, especificando el pago, bonificación y deducciones.
- Registro y listado de apertura de caja antes de iniciar el proceso de ventas
- Registro y listado de cierre de caja, después de iniciar el proceso de ventas, para conocer con cuanto dinero se cuenta.


> La intención como  proyecto base es trabajar con los roles de administrador (con todos los permisos), y el de vendedor normal (permisos asignados a este rol), la misma se puede modificar y /o ampliar según las necesidades del proyecto de manera manual, aprovechando los recursos que facilita el paquete **spatie/laravel-permission** para agregar mas roles de usuarios así como diversos permisos.

---

## Requerimientos

- [Composer](https://getcomposer.org/)
- [Requerimientos de Laravel 5.5](https://laravel.com/docs/5.5/installation#installation)
- [Node.js y NPM](https://nodejs.org/es/) (Opcional para trabajar y compilar  los assets con Laravel Mix)

---

> Aviso **crear un virtual host** para este proyecto, **es necesario que el directorio public (como se aconseja) del framework funcione como la raíz**, o no funcionara la correcta lectura de las fuentes por parte de font awesome y otras librerias empleadas en este desarrollo.

## Instalación

```
git clone https://github.com/theizerg/facturacion-master.git
cd facturacion-master
composer install
```

Modificar el archivo **.env** con los datos correspondientes al proyecto, credenciales a la base de datos y envió de correo electrónico (recuperación de contraseña).

Migrar a la base de datos los roles y permisos iniciales, así como el **usuario administrador por defecto**.

```
cd facturacion-master
php artisan migrate --seed
```
Los datos del **usuario por defecto** podrán ser vistos (y modificados antes de migrar), en los archivos **seeds** del proyecto en **database/seeds**.

Disfrutalo!! :)

---

## Paquetes y dependencias

A continuación el listado de tecnologías y plugins utilizados en este desarrollo.

### Back-end
- [Laravel 5.5](https://laravel.com/)
- [spatie/laravel-permission 2.7](https://github.com/spatie/laravel-permission)
- [nicolaslopezj/searchable 1.*](https://github.com/nicolaslopezj/searchable)
- [vinkla/hashids 3.3](https://github.com/vinkla/laravel-hashids)

### Front-end

- [Bootstrap 3.3.7](https://getbootstrap.com/docs/3.3/)
- [Jquery 3.2](https://jquery.com/)
- [Font Awesome 4.7.0](http://fontawesome.io/)
- [Admin-Lte 2.4.2](https://adminlte.io/)
- [jQuery-Autocomplete 1.4.4](https://github.com/devbridge/jQuery-Autocomplete)
- [toastr 2.1.2](http://codeseven.github.io/toastr/)
- [iCheck 1.0.2](http://icheck.fronteed.com/)
- [Pace 1.0.3](http://github.hubspot.com/pace/docs/welcome/)

---

## Front-end (Assets)

Los [componentes y plugins](https://adminlte.io/docs/2.4/dependencies) utilizados por la plantilla Admin Lte, así como otras incorporadas fueron instalas haciendo uso de **NPM** y compiladas posteriormente con Laravel Mix (Webpack) en los archivos **public/css/app.css** y **public/js/app.js**.

Si desea instalar nuevos plugins o agregar estilos personalizados o nuevos scripts javascript con este metodo, se necesita tener instalados **Node.js** con **NPM** establecer los plugins requeridos en el archivo **package.js** y modificar los archivos assets en **resources/assets** y posteriormente ejecutar:

```
cd facturacion-master
npm install
npm run dev o npm run prod
```
Para mayor información en el uso de **Laravel mix** visita la documentación en el [sitio de Laravel](https://laravel.com/docs/5.5/mix) y en el [repositorio del proyecto](https://github.com/JeffreyWay/laravel-mix).

---

#### Créditos

Theizer Gonzalez 
Backend web developer  
theizerg@gmail.com | [@theizerg](https://www.instagram.com/theizerg/)
