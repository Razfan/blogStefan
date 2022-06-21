<?php

namespace App\Http\Controllers;

use App\Exports\EntradasExport;
use App\Models\entradas;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use dompdf\dompdf;

class EntradasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entradas = entradas::all();

        return view('entradas', [
            'entradas' => entradas::latest()->paginate(3)
        ]);
    }

    public function add()
    {
        return view('entradasadd');
    }

    public function export() 
    {
        return Excel::download(new EntradasExport, 'entradas.xlsx');
    }

    public function exportPDF() 
    {
        return (new EntradasExport)->download('entradas.pdf', Excel::DOMPDF);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entradas = new entradas;
        $entradas->id = $request->id; 
        $entradas->usuario_id = $request->usuario_id; 
        $entradas->categoria_id = $request->categoria_id; 
        $entradas->Titulo = $request->Titulo; 
        $entradas->Imagen = $request->Imagen; 
        $entradas->Descripcion = $request->Descripcion; 
        $entradas->Fecha = $request->Fecha; 
        $entradas->save();
        return redirect()->route('entradas.add');
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

    public function edit(Request $request)
    {
        $id = $request->id;
        $entradas = entradas::find($id);
        return view('entradaseditar', ['entradas'=>$entradas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        /* $data = array(
            'id' => $request->id,
            'usuario_id' => $request->usuario_id,
            'categoria_id' => $request->categoria_id,
            'Titulo' => $request->Titulo,
            'Imagen' => $request->Imagen,
            'Descripcion' => $request->Descripcion,
            'Fecha' => $request->Fecha,
            
        );
        entradas::where('id',$id)->update($data); */

        $entradas = entradas::find($id);
        $entradas->id = $request->id; 
        $entradas->usuario_id = $request->usuario_id; 
        $entradas->categoria_id = $request->categoria_id; 
        $entradas->Titulo = $request->Titulo; 
        $entradas->Imagen = $request->Imagen; 
        $entradas->Descripcion = $request->Descripcion; 
        $entradas->Fecha = $request->Fecha; 
        $entradas->save();
        return redirect()->route('entradas.index');
    }
    
    public function delete(Request $request)
    {
        $id = $request->id;
        $entradas = entradas::find($id)->delete();
        return redirect()->route('entradas.index');
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
