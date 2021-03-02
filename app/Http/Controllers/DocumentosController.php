<?php

namespace App\Http\Controllers;

use App\Models\Documentos;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function documento()
    {
         if (auth()->user()->hasRole('Administrador')) {
          
          $roles = Role::get();  
          $documentos = Documentos::get();
          return view ('admin.iglesias.documentos.index', compact('documentos','roles'));
         }
         $roles = Role::get();
          $documentos = Documentos::where('user_id', auth()->user()->id)->get();
          return view ('admin.iglesias.documentos.index', compact('documentos','roles'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //guardar imagen
        $file = $request->file('nb_documento');
        $path = public_path() . '/images/documentos';
        $fileName = uniqid() . $file->getClientOriginalName();
        $moved = $file->move($path, $fileName);

                //dd($fileName);

                //crear registro
                $producto->photo = $fileName;

        //crear registro
        if($moved)
        {
            $documento = new Documentos();
            $documento->nb_documento = $fileName;
            $documento->iglesia_id = $request->iglesia_id;
            $documento->user_id = $request->user_id;
            //productImgage->featured = false
            $documento->save(); //INSERT

            //dd($documento);
        } 

         $notification = array(
            'message' => '¡Documento guardado!',
            'alert-type' => 'success'
        );
        
        return \Redirect::to('documento')->with($notification);     



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documento = Documentos::find($id);

        $public_path = public_path().'/images/documentos/'.$documento->nb_documento;
        
        if ($public_path <> null){

            return response()->download($public_path);
        }

         $notification = array(
            'message' => '¡Sin documento registrado!',
            'alert-type' => 'error'
        );
        
        return \Redirect::to('documento')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Documentos $documentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documentos $documentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documentos $documentos)
    {
        //
    }
}
