<?php

namespace App\Http\Controllers;

use App\Models\Ejemplo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EjemploController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
      $ejemplos=DB::table('ejemplos')->get();
      return view("projects/index",'ejemplos'->$ejemplos);
        
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
     * @param  \App\Models\Ejemplo  $ejemplo
     * @return \Illuminate\Http\Response
     */
    public function show(Ejemplo $ejemplo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ejemplo  $ejemplo
     * @return \Illuminate\Http\Response
     */
    public function edit(Ejemplo $ejemplo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ejemplo  $ejemplo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ejemplo $ejemplo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ejemplo  $ejemplo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ejemplo $ejemplo)
    {
        //
    }
}
