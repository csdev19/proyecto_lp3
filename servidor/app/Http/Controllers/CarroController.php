<?php

namespace App\Http\Controllers;

use App\carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Conectar con el servidor de base de datos
        $conexion = mysqli_connect ("localhost", "root", "")
        or die ("No se puede conectar con el servidor");
        // Seleccionar base de datos
        mysqli_select_db ($conexion,"laravel_prueba")
            or die ("No se puede seleccionar la base de datos");
        $instruccion    = "SELECT * FROM carros";
        $consulta = mysqli_query ( $conexion,$instruccion)
        or die ("Fallo en la consulta");
        $tempArray = array();
        $myArray = array();
        while ($row = $consulta->fetch_object()) {
            $tempArray = $row;
            array_push($myArray, $tempArray);
        }
        $nuevo = json_encode($myArray);
        return $nuevo;
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
    {        // Conectar con el servidor de base de datos

        $nombre = 'garlic te odio hijo de remil puctas';

        $conexion = mysqli_connect ("localhost", "root", "")
        or die ("No se puede conectar con el servidor");
        // Seleccionar base de datos
        mysqli_select_db ($conexion, "laravel_prueba")
            or die ("No se puede seleccionar la base de datos");
        $instruccion   = "INSERT INTO carros(nombre) VALUES ('$nombre')";
        $consulta = mysqli_query ( $conexion,$instruccion)
        or die ("Fallo en la consulta");
        mysqli_close ($conexion);

        // $carro = carro::create($request->all());
        $object = (object) [
            'nombre' => $nombre
        ];
        return json_encode($consulta);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show(carro $carro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit(carro $carro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carro $carro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(carro $carro)
    {
        //
    }
}
