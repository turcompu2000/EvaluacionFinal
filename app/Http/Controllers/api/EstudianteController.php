<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudiante;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $estudiante=DB::table('estudiantes')
    ->get();
    return json_encode(['estudiante'=>$estudiante]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiantes = new Estudiante();
        $estudiantes->id_Estudiante=$request->id_Estudiante;
        $estudiantes->Nomb_Estudiante=$request->Nomb_Estudiante;
        $estudiantes->Apellido=$request->Apellido;
        $estudiantes->Carrera=$request->Carrera;     
        $estudiantes->save();
        return json_encode(['estudiantes' => $estudiantes]);
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
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        $estudiantes =DB::table('estudiantes')
        ->get();
        return json_encode(['estudiantes' => $estudiantes, 'success'=>true]);
    }
}
