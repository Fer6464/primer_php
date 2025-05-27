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

    public function ver_updt()
    {
        return view("projects/update");
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
    public function edit($id)
    {
        $ejemplo=Ejemplos::find($id);
        return view('projects/update', compact('ejemplo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ejemplos  $ejemplo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       /* $request -> validate([
            'titulo'=>'required|max:255',
            'descripcion'=>'required'
        ]);*/
        $ejemplo=Ejemplos::find($id);
        $ejemplo->update($request->all());
        return redirect('example/')->with('success','Ejemplo actualizado satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ejemplos  $ejemplo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $ejemplo=Ejemplos::find($id);
        $ejemplo->destroy($request->all());
        return redirect('example/')->with('success','Ejemplo borrado satisfactoriamente.');
    }
}
