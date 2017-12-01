<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return Cliente::where('nombreCliente','Sol Figueroa')->first();
        //return view('clientes.clientes');


        $clientes = Cliente::paginate(5);
        return view('clientes.clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return('clientes.create');
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
        $cliente = $this->validate(request(), [
            'nombreCliente' => 'required',
            'cedulaCliente' => 'required',
            'telefonoCliente' => 'required',
            'direccionCliente'=> '',
            'emailCliente' => ''
          ]);
          Cliente::create($cliente);
          return back()->with('success','Se agregó el nuevo Cliente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($value,$condition)
    {
        //
        if($condition==1)//por nombre
            $result= Cliente::where('nombreCliente',$value)->first();
        else if($condition==2)//por cedula
            $result= Cliente::where('nombreCliente',$value)->first();
        else if($condition==2)//por telefono
            $result= Cliente::where('telefonoCliente',$value)->first();
        return $result;

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
