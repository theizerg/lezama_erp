<?php

namespace App\Http\Controllers;

use App\Models\Iglesias;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class IglesiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iglesias = Iglesias::get();
        $roles = Role::get();
        return view('admin.iglesias.index', compact('roles','iglesias'));

    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function documentos($id)
    {
        $iglesia = Iglesias::find($id);
        $roles = Role::get();
        return view('admin.iglesias.documentos.create', compact('roles','iglesia'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        dd($request);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iglesias  $iglesias
     * @return \Illuminate\Http\Response
     */
    public function show(Iglesias $iglesias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iglesias  $iglesias
     * @return \Illuminate\Http\Response
     */
    public function edit(Iglesias $iglesias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iglesias  $iglesias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iglesias $iglesias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iglesias  $iglesias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iglesias $iglesias)
    {
        //
    }
}
