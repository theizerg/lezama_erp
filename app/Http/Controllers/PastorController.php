<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Models\Pastor;
use App\Models\Estado;
use App\Models\Estado_Civil;
use App\Models\Genero;
use App\Models\Grado_Ministerial;
use App\Models\Grado_Instruccion;
use App\Models\Nacionalidad;
use App\Models\Pais;
use App\Models\TipoSangre;
use App\Models\TipoLocal;
use App\Models\Iglesias;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class PastorController extends Controller
{   
  
   
      /**
     *  Only authenticated users can access this controller
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $pastor = \Auth::user()->hasRole('Administrador'); 
       $idPastor=\Auth::user()->id;

     if ($pastor <> 'Ricardo Manrique') {
       
        $roles = Role::get();
        $pastores = Pastor::where('users_id',$idPastor)->Paginate(4);
        return view('admin.pastor.index',compact('pastores','roles'));

        }

        $roles = Role::get();

         $pastores = Pastor::Paginate(4);
        return view('admin.pastor.index',compact('pastores','roles'));


        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $usuario=\Auth::user();
        $idUsuario=$usuario->id;
        $genero = Genero::get()->pluck('nb_genero','id');
        $estadoC = Estado_Civil::get()->pluck('nb_estado_civil','id');
        $estado = Estado::get()->pluck('nb_estado','id');
        $pais = Pais::get()->pluck('nb_pais','id');
        $gradoMin = Grado_Ministerial::get()->pluck('nb_grado_ministerial','id');
        $gradoIns = Grado_Instruccion::get()->pluck('nb_grado_instruccion','id');
        $nacionalidad = Nacionalidad::get()->pluck('nb_nacionalidad','id');
        $tipoSangre = TipoSangre::get()->pluck('nb_tipo_sangre','id');
        $roles = Role::get();

            return view('admin.pastor.create')->with([
            'genero'     => $genero,
            'estadoC'    => $estadoC,
            'estado'     => $estado,
            'gradoMin'   => $gradoMin,
            'gradoIns'        => $gradoIns,
            'nacionalidad'    => $nacionalidad,
            'pais'            => $pais,
            'tipoSangre'      => $tipoSangre,
            'idUsuario'       => $idUsuario,
            'roles'           => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);

        $this->validateRequest($request,null);
        $pastor = new Pastor();
        $this->setPastor($pastor,$request);
        $notification = array(
          'message' => '¡Registro guardado!',
          'alert-type' => 'success'
      );
       return \Redirect::to('pastor/'.$pastor->encode_id.'/iglesia')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $pastor = Pastor::find(\Hashids::decode($id)[0]);
       $roles = Role::get();
        return view('admin.pastor.show',compact('roles','pastor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=\Auth::user();
        $idUsuario=$usuario->id;
        $genero = Genero::get()->pluck('nb_genero','id');
        $estadoC = Estado_Civil::get()->pluck('nb_estado_civil','id');
        $estado = Estado::get()->pluck('nb_estado','id');
        $pais = Pais::get()->pluck('nb_pais','id');
        $gradoMin = Grado_Ministerial::get()->pluck('nb_grado_ministerial','id');
        $gradoIns = Grado_Instruccion::get()->pluck('nb_grado_instruccion','id');
        $nacionalidad = Nacionalidad::get()->pluck('nb_nacionalidad','id');
        $tipoSangre = TipoSangre::get()->pluck('nb_tipo_sangre','id');
        $pastor = Pastor::find(\Hashids::decode($id)[0]);
        $roles = Role::get();


            return view('admin.pastor.edit')->with([
            'genero'     => $genero,
            'estadoC'    => $estadoC,
            'estado'     => $estado,
            'gradoMin'   => $gradoMin,
            'gradoIns'        => $gradoIns,
            'nacionalidad'    => $nacionalidad,
            'pais'            => $pais,
            'tipoSangre'      => $tipoSangre,
            'idUsuario'       => $idUsuario,
            'pastor'          => $pastor,
            'roles'           => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateRequest($request,$id);
        $pastor = Pastor::find($id);
        $this->setPastor($pastor,$request);
        return json_encode(['success' => true, 'pastor_id' => $pastor->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Pastor::find($id)->delete();
        return json_encode(['success' => true]);
    }

     private function validateRequest($request,$id){
        /**
         *  specifying the validation rules 
         */
        /**
         *  Below in image validation rules we are first checking
         *  that if there is an image, if not then don't apply the
         *  validation rules. the reason we are doing this is because
         *  if we are updating an employee but not updating the image. 
         */
        return $this->validate($request,[
            /*'tx_nombres'     =>  'required|min:3|max:50',
            'tx_apellidos'   =>  'required|min:3|max:50',
            'nu_cedula'      =>  'required|min:2|max:9',
            'nu_telefono'    =>  'required|min:1',
            'nu_edad'        =>  'required|max:2',
            'tx_direccion'   =>  'required',
            'fe_nacimiento'  =>  'required',
            'lugar_nacimiento_id'       =>  'required',
            'nacionalidad_id'           =>  'required',
            'genero_id'                 =>  'required',
            'grado_instruccion_id'      =>  'required',
            'estado_civil_id'           =>  'required',
            'estado_id'                 =>  'required',
            'nb_bau_Espiritu_Santo'     =>  'required',
            'nb_ins_teologico'          =>  'required',
            //'nb_desc_ins_teologico'     =>  'required',
            //  'nu_tiempo_ins'             =>  'required',
            'fe_ingreso'                =>  'required',
            'grado_ministerial_id'      =>  'required',
            'nb_sufre_enfermedad'       =>  'required',
            'nb_descripcion_enfermedad' =>  'required',
            'tipo_sangre_id'            =>  'required',
            'nb_ocupacion'              =>  'required',
            'nu_zona'                   =>  'required',
            'users_id'                   =>  'required',
            'tx_correo'          =>  'required'*/
            //'picture'        =>  ($request->hasFile('picture') ? 'required|image|max:1999' : '')
            /**
             *  if we are updating an employee but not changing the
             *  email then this will throw a validation error saying
             *  that email should be unique. that's why we need to specify
             *  the current employee to ignore the unique validation rule.
             *  Above in email rules , we are using a ternary operator simply
             *  saying that if we pass an id then it will ignore that employee
             *  (which we want in update) and if id's null then it will check
             *  every employee to be unique (which we want in create because
             *  every employee should have a unique email).
             *  check the documentation for more details, 
             *  https://laravel.com/docs/5.6/validation#rule-unique 
             */

            
        ]);
    }



     private function setPastor(Pastor $pastor,Request $request){
        $edad = Carbon::parse($request->fe_nacimiento)->age;

        $pastor->tx_nombres   = $request->input('tx_nombres');
        $pastor->tx_apellidos    = $request->input('tx_apellidos');
        $pastor->nu_cedula        = $request->input('nu_cedula');
        $pastor->nu_telefono          = $request->input('nu_telefono');
        $pastor->nu_edad      = $request->input('nu_edad');
        $pastor->tx_direccion        = $request->input('tx_direccion');
        //Format Date then insert it to the database
        $pastor->fe_nacimiento    = date('Y-m-d', strtotime(str_replace('-', '/', $request->input('fe_nacimiento'))));
        $pastor->lugar_nacimiento_id    = $request->input('lugar_nacimiento_id');
        $pastor->nacionalidad_id  = $request->input('nacionalidad_id');
        $pastor->genero_id    = $request->input('genero_id'); 
        $pastor->grado_instruccion_id      = $request->input('grado_instruccion_id');
        $pastor->estado_civil_id      = $request->input('estado_civil_id');
        $pastor->estado_id     = $request->input('estado_id');
        $pastor->tx_nota   = $request->input('tx_nota');
        $pastor->nb_bau_Espiritu_Santo   = $request->input('nb_bau_Espiritu_Santo');
        $pastor->nb_ins_teologico   = $request->input('nb_ins_teologico');
        $pastor->nb_desc_ins_teologico   = $request->input('nb_desc_ins_teologico');
        $pastor->nu_tiempo_ins   = $request->input('nu_tiempo_ins');
        $pastor->fe_ingreso   = $request->input('fe_ingreso');
        $pastor->grado_ministerial_id   = $request->input('grado_ministerial_id');
        $pastor->nb_sufre_enfermedad   = $request->input('nb_sufre_enfermedad');
        $pastor->nb_descripcion_enfermedad   = $request->input('nb_descripcion_enfermedad');
        $pastor->tipo_sangre_id   = $request->input('tipo_sangre_id');
        $pastor->tx_correo   = $request->input('tx_correo');
        $pastor->nb_ocupacion   = $request->input('nb_ocupacion');
        $pastor->nu_zona   = $request->input('nu_zona');
        $pastor->nb_titulo_obtenido   = $request->input('nb_titulo_obtenido');
        $pastor->users_id   = $request->input('users_id');
        $pastor->status_id   = $request->input('status_id');
        $pastor->save();
    }



    public function iglesia($id)
    {
        $usuario=\Auth::user();
        $idUsuario=$usuario->id;
        $pastor = Pastor::find(\Hashids::decode($id)[0]);
        $estado = Estado::get()->pluck('nb_estado','id');
        $locales = TipoLocal::get()->pluck('nb_nombre','id');

        //dd($locales);
        $roles = Role::get();


            return view('admin.pastor.iglesia')->with([
            'pastor'          => $pastor,
            'roles'           => $roles,
            'estado'          => $estado,
            'locales'         => $locales
        ]);
    }


    public function guardar(Request $request)
    {

        $iglesia = new Iglesias();
        $iglesia->nb_nombre = $request->nb_nombre;
        $iglesia->nu_zona = $request->nu_zona;
        $iglesia->nb_urbanizacion = $request->nb_urbanizacion;
        $iglesia->nb_edificio = $request->nb_edificio;
        $iglesia->nu_casa = $request->nu_casa;
        $iglesia->nb_parroquia = $request->nb_parroquia;
        $iglesia->nb_municipio = $request->nb_municipio;
        $iglesia->nb_ciudad = $request->nb_ciudad;
        $iglesia->estado_id = $request->estado_id;
        $iglesia->nu_codigo_postal = $request->nu_codigo_postal;
        $iglesia->nu_telefono = $request->nu_telefono;
        $iglesia->tipo_local_id = $request->tipo_local_id;
        $iglesia->pastor_id = $request->pastor_id;
        $iglesia->users_id = $request->users_id;

        $iglesia->save();



       return json_encode(['success' => true, 'iglesia_id' => $iglesia->id]);

       
    }
}
