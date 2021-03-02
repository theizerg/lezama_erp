<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Categoria; 
use App\Models\Etiqueta;
use App\Models\Cabecera;
use Spatie\Permission\Models\Role;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show  the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (\Auth::user()->hasRole('Administrador')) {
         $usuarios   = User::all()->count();
         $categorias = Categoria::all()->count();
         $etiquetas  = Etiqueta::all()->count();
         
         $roles = Role::get();
     
        return view('admin.home.index')
            ->with([
                'roles'       =>  $roles,
                'usuarios'    =>  $usuarios,
                'categorias'  =>  $categorias,
                'etiquetas'   =>  $etiquetas
                //'posts'       =>  $posts
            ]);
        $usuarios=User::all()->count();
         $roles = Role::get();
     
        return view('admin.home.index')
            ->with([
                'roles'     =>  $roles,
                'usuarios'  =>  $usuarios

            ]);
        }

       


   
    }




    /**
     *  get the sub month of the given integer
     */
    private function getPrevDate($num){
        return Carbon::now()->subMonths($num)->toDateTimeString();
    }
}
