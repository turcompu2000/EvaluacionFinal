<?php

namespace App\Http\Controllers;


use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $registros=DB::table('estudiantes')
       ->join('carrera', 'estudiantes.id_Carrera','=','carrera.id_Carrera')
       ->select('estudiantes.*',"carrera.Carrera")
       ->get();
       return view('Registro.index',['registros'=>$registros]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registro = DB::table('carrera')
        ->orderBy('Carrera')
        ->get();
        return view('Registro.new',['registro'=>$registro]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro = new Estudiante();
        $registro->Nomb_Estudiante=$request->Nombre;
        $registro->Apellido=$request->Apellido;
        $registro->Carrera=$request->Profesionales;
        $registro->save();

        $registros=DB::table('estudiantes')
       ->join('carrera', 'estudiantes.id_Carrera', '=', 'carrera.id_Carrera')
       ->select('estudiantes.*',"carrera.Carrera")
       ->get();
       return view('Registro.index',['registros'=>$registros]);
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
