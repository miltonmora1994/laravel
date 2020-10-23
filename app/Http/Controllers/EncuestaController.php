<?php

namespace App\Http\Controllers;

use App\Models\encuesta;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('Encuesta.index');

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Encuesta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $DatosEmpleado=request()->all();
        return Response()->json($DatosEmpleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function show(encuesta $encuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(encuesta $encuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, encuesta $encuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(encuesta $encuesta)
    {
        //
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
