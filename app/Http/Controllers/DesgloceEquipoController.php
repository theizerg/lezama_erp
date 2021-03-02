<?php

namespace App\Http\Controllers;

use App\Models\DesgloceEquipo;
use Illuminate\Http\Request;

class DesgloceEquipoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (auth()->user()->hasPermissionTo('VerNosotros')) {
        $cabeceras = DesgloceEquipo::get();
        return view ('admin.equipo.desgloce.index', compact('cabeceras'));
            
        }else
         $notification = array(
         'message' => '¡No tiene permisos!',
         'alert-type' => 'error'
        );
        
        return Redirect::to('/home')->with($notification);   
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (auth()->user()->hasPermissionTo('VerNosotros')) {
        $cabeceras = DesgloceEquipo::get();
        return view ('admin.equipo.desgloce.create', compact('cabeceras'));
            
        }else
         $notification = array(
         'message' => '¡No tiene permisos!',
         'alert-type' => 'error'
        );
        
        return Redirect::to('/home')->with($notification);   
    }



    public function store(Request $request)
    {
        //dd($request);
        $desgloce = new DesgloceEquipo();
        $this->validateRequest($request,NULL);
        $fileNameToStore = $this->handleImageUpload($request);
        //dd($fileNameToStore);
        $this->setEquipo($request ,$desgloce, $fileNameToStore);

        $notification = array(
            'message' => '¡Datos ingresado satisfactoriamente!',
            'alert-type' => 'success'
        );

        return \Redirect::to('/desgloce')->with($notification);
    }

     /**
     *  Validate all the inputs
     */
    private function validateRequest(Request $request, $id)
    {
        $this->validate($request,[
            'name'   =>  'required',
            'last_name'    =>  'required',
            'red_social'    =>  'required',
            'ocupacion'    =>  'required',
            'movimiento'    =>  'required',
            'status_id'    =>  'required',
            //if we are updating admin but not changing password.
            //'password'     =>  ''.( $id ? 'nullable|min:7' : 'required|min:7' ),
            //'username'     =>  'required|unique:admins,username,'.($id ? : '' ).'',
            //'email'        =>  'required|email|unique:admins,email,'.($id ? : '' ).'|min:7',
            'photo'      =>  ''.($request->hasFile('photo')  ? 'required' : '')
        ]);
    }

     /**
     *  Handle Image Upload
     */
    /**
     *  Handle Image Upload
     */
    public function handleImageUpload(Request $request){
        if( $request->hasFile('photo') ){
            
            //get filename with extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            
            //get just filename
            $filename = pathInfo($filenameWithExt,PATHINFO_FILENAME);
            
            // get just extension
            $extension = $request->file('photo')->getClientOriginalExtension();
            
            /**
             * filename to store
             * 
             *  we are appending timestamp to the file name
             *  and prepending it to the file extension just to
             *  make the file name unique.
             */
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            
            //upload the image
            $path = $request->file('photo')->storeAs('public/equipo' , $fileNameToStore);
        }
        /**
         *  return the file name so we can add it to database.
         */
        return $fileNameToStore;
    }
    
    /**
     * Add or update an admin
     */
    private function setEquipo(Request $request , DesgloceEquipo $desgloce , $fileNameToStore){
        $desgloce->name = $request->input('name');
        $desgloce->last_name = $request->input('last_name');
        $desgloce->ocupacion = $request->input('ocupacion');
        $desgloce->movimiento = $request->input('movimiento');
        $desgloce->red_social = $request->input('red_social');
        $desgloce->status_id = $request->input('status_id');
        $desgloce->tx_resena = $request->input('tx_resena');
        if($request->hasFile('photo')){
            $desgloce->photo = $fileNameToStore;
        }
        $desgloce->save();
    }

    public function show(){

    }


}
