<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuarios extends Controller
{

 /**
 * @SWG\Info(title="Documentação Gestor-Clientes", version="1.0").
 */

/**
     * @SWG\Get(
     *     path="/api/usuarios",
     *     summary="Retorna todos os usuários do sistema",
     *     tags={"Usuários"},
     *     @SWG\Parameter(
     *         name="token",
     *         in="query",
     *         required=true,
     *         type="string",
     *         description="Digita o token para autenticação"
     *     ),
     *     @SWG\Response(response=200,description="Retorna um array com usuários",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(
     *                 type="object",
     *                 @SWG\Property(property="id", type="int", example=148),
     *                 @SWG\Property(property="nome", type="string", example="Joaquim"),
     *                 @SWG\Property(property="email", type="string", example="joaquim@gmail.com")
     *             )
     *         )
     *    )
     *   )
     * )
     */
public function index()
{
        //
    $usuarios = \App\User::all();
    return response()->json($usuarios,200);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
