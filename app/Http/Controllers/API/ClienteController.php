<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreTabla;
//use App\Http\Requests\EditarTabla;
use App\Http\Requests\EditarTabla;
use App\Models\Clientedos;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente=Clientedos::query()->paginate(6);
        return response($cliente,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTabla $request)
    {
        Clientedos::create($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Cliente guardado exitosamente'
        ]); 
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'codigocliente'=>'required',
            //"codigoCarnet"=>"required|unique:estudiantes,codigoCarnet,".$this->route('estudiante')->id,
            'Nombre'=>'required',
            'apellido'=>'required',
            'direccion'=>'required',
            'telefono'=>'required'
        ]);

        $cliente= Clientedos::find($id);
        $cliente->Nombre=$request->Nombre;
        $cliente->apellido=$request->apellido;
        $cliente->direccion=$request->direccion;
        $cliente->telefono=$request->telefono;
        $cliente->telefono=$request->telefono;
        $cliente->update();
        return response()->json(['message'=>'Editado correctamente'],200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientedos $cliente)
    {
        $cliente->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>'Cliente Eliminado exitosamente'
        ]);
    }
}
