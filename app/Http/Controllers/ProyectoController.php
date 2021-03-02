<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        if (auth()->user()->hasPermissionTo('VerProyectos')) {
        $cabeceras = Proyecto::get();
        //dd($cabeceras);
        return view ('admin.proyectos.index', compact('cabeceras'));
            
        }else
         $notification = array(
         'message' => '¡No tiene permisos!',
         'alert-type' => 'error'
        );
        
        return \Redirect::to('/home')->with($notification);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->hasPermissionTo('CrearProyectos')) {
        
        return view ('admin.proyectos.create ');
            
        }else
         $notification = array(
         'message' => '¡No tiene permisos!',
         'alert-type' => 'error'
        );
        
        return \Redirect::to('/home')->with($notification);   
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $encabezado = Proyecto::create($request->all());
         $notification = array(
            'message' => '¡Datos ingresado satisfactoriamente!',
            'alert-type' => 'success'
        );

        return \Redirect::to('/proyectos')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cabecera  $cabecera
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cabecera  $cabecera
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        if (auth()->user()->hasPermissionTo('EditarProyectos')) {
         $encabezado = Proyecto::find(\Hashids::decode($id)[0]);
        return view ('admin.proyectos.edit',compact('encabezado'));
            
        }else
         $notification = array(
         'message' => '¡No tiene permisos!',
         'alert-type' => 'error'
        );
        
        return \Redirect::to('/home')->with($notification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cabecera  $cabecera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $role = Proyecto::findOrFail(\Hashids::decode($id)[0]);
       $role->update($request->all());
      //dd($role);
      //$encabezado->update($request->all());

      $notification = array(
            'message' => '¡Datos ingresados satisfactoriamente!',
            'alert-type' => 'success'
        );

        return \Redirect::to('/proyectos')->with($notification);


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto)
    {
        //
    }
}
