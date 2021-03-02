<?php

namespace App\Http\Controllers;

use App\Models\GrupoPlanes;
use Illuminate\Http\Request;

class GrupoPlanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    if (auth()->user()->hasPermissionTo('VerNosotros')) {
        $cabeceras = GrupoPlanes::get();
        return view ('admin.planesCuadro.index', compact('cabeceras'));
            
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
        if (auth()->user()->hasPermissionTo('CrearNosotros')) {
        
        return view ('admin.planesCuadro.create ');
            
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
         $somos = GrupoPlanes::create($request->all());
         $notification = array(
            'message' => '¡Datos ingresado satisfactoriamente!',
            'alert-type' => 'success'
        );

        return \Redirect::to('/planesCuadros')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nosotros  $Nosotros
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nosotros  $Nosotros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        
        if (auth()->user()->hasPermissionTo('EditarNosotros')) {
         $encabezado = GrupoPlanes::find(\Hashids::decode($id)[0]);
        return view ('admin.planesCuadro.edit',compact('encabezado'));
            
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
       $role = GrupoPlanes::findOrFail(\Hashids::decode($id)[0]);
       $role->update($request->all());
      //dd($role);
      //$somos->update($request->all());

      $notification = array(
            'message' => '¡Datos ingresados satisfactoriamente!',
            'alert-type' => 'success'
        );

        return \Redirect::to('/planesCuadros')->with($notification);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GrupoPlanes  $grupoPlanes
     * @return \Illuminate\Http\Response
     */
    public function destroy(GrupoPlanes $grupoPlanes)
    {
        //
    }
}
