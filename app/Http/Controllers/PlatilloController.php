<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function show(Platillo $platillo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function edit(Platillo $platillo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platillo $platillo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platillo $platillo)
    {
        //
    }

    public function listaREST(Request $request) {
        $user = Auth::user();
        if( $user!=null ) {
            $id = $user->restaurant->id;
            $busqueda = $request->input('txt');
            $platillos = Platillo::where('id_restaurant','=',$id)
                        ->where('nombre','like','%' . $busqueda . '%')->get();
            return $platillos;
        }
        return "Acceso Restringido";
    }

    public function storeREST(Request $request) {
        $user = Auth::user();
        if( $user!=null ) {
            $id = $user->restaurant->id;
            
            //Registrar nuevo platillo
            $platillo = new Platillo;
            $platillo->id_restaurant = $id;
            $platillo->nombre = $request->input("nombre");
            $platillo->descripcion = $request->input("descr");
            $platillo->precio = $request->input("precio");
            $platillo->categoria = $request->input("cat");
            $platillo->status = "DISPONIBLE";
            $platillo->imagen = '';
            $platillo->save();

            return "OK";
        }
        return "Acceso Restringido";
    }
}
