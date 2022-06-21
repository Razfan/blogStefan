<?php

namespace App\Http\Controllers;

use App\Exports\UsuariosExport;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\usuarios;
use Maatwebsite\Excel\Facades\Excel;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::get();

        return view('usuarios', [
            'usuarios' => User::latest()->paginate(3)
        ]);


    }

    public function export() 
    {
        return Excel::download(new UsuariosExport, 'entradas.xlsx');
    }

    public function exportPDF() 
    {
        return (new UsuariosExport)->download('usuarios.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('usuarios.create',[
            'project' => new usuarios
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
