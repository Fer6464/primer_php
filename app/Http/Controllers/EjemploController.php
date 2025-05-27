<?php

namespace App\Http\Controllers;

use App\Models\Ejemplos;
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
      $ejemplo=DB::table('ejemplos')->get();
      return view('projects/index',['ejemplos'=>$ejemplo]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("projects/new");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ejemplos::create($request->all());
        return redirect('example/')
            ->with('success', 'Ejemplo creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ejemplos  $ejemplo
     * @return \Illuminate\Http\Response
     */
    public function show(Ejemplos $ejemplo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ejemplos  $ejemplo
     * @return \Illuminate\Http\Response
     */
    public function edit(Ejemplos $ejemplo)
    {
        $ejemplo=Ejemplos::find($id);
        return view('projects/update',compact('ejemplo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ejemplos  $ejemplo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ejemplos $ejemplo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ejemplos  $ejemplo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ejemplos $ejemplo)
    {
        //
    }
}
