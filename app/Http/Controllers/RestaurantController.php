<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RestaurantController extends Controller
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
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }

    public function loginREST(Request $request) {
        //$usuario = User::where('email','=',$request->input('email'))->first();
        if( Auth::attempt(['email' => $request->input('email'), 
        'password' => $request->input('pass') ]) ) {
            $usuario = Auth::user();
            if( $usuario->restaurant->verificado == 'RECHAZADO') {
                return json_encode(['respuesta' => 'Usuario denegado']);
            } else if( $usuario->restaurant->verificado == 'SOLICITUD' ) {
                return json_encode(['respuesta' => 'Tu solicitud está siendo revisada']);
            }

            //Si se procede a la bienvenida, generamos la llave
            $token = Str::random(60);
 
            $request->user()->forceFill([
                'api_token' => hash('sha256', $token),
            ])->save();
            return json_encode(['respuesta' => 'Bienvenido',
                'token' => $token]);
        }
        return json_encode(['respuesta' => 'Usuario y/o contraseña incorrectos']);
    }
}
