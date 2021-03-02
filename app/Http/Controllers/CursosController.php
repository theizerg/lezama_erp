<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use App\Models\GrupoPlanes;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        if (auth()->user()->hasPermissionTo('VerCabecera')) {
        $cabeceras =Cursos::get();
        return view ('admin.cursos.index', compact('cabeceras'));
            
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
        if (auth()->user()->hasPermissionTo('CrearCabecera')) {
        $planes = GrupoPlanes::get()->pluck('nb_titulo','id');
        return view ('admin.cursos.create ', compact('planes'));
            
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
         $encabezado = Cursos::create($request->all());
         $notification = array(
            'message' => '¡Datos ingresado satisfactoriamente!',
            'alert-type' => 'success'
        );

        return \Redirect::to('/cursos')->with($notification);
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
        
        if (auth()->user()->hasPermissionTo('EditarCabecera')) {
         $encabezado = Cursos::find(\Hashids::decode($id)[0]);
         $planes = GrupoPlanes::get()->pluck('nb_titulo','id');
        return view ('admin.cursos.edit',compact('encabezado','planes'));
            
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
       $role =Cursos::findOrFail(\Hashids::decode($id)[0]);
       $role->update($request->all());
      //dd($role);
      //$encabezado->update($request->all());

      $notification = array(
            'message' => '¡Datos ingresados satisfactoriamente!',
            'alert-type' => 'success'
        );

        return \Redirect::to('/cursos')->with($notification);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cursos $cursos)
    {
        //
    }
}
