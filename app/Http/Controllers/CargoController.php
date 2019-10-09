<?php

namespace App\Http\Controllers;

use App\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $variables = Cargo::all();
        return view('cargos.index',compact('variables'));
        //$cargos =>cargos::orderBy('id', 'Asc')=>paginate(5);
    }

    public function create()
    {
        return view('usuarios.add');
    }

    public function store(Request $request)
    {
        //
        $guardar = new Cargo;
        $guardar->name = $request->name;
        $guardar->save();
        return redirect('users');
        
    }
    
    public function show($id)
    {
        //
        $mostrar = Cargo::find($id);
        return view('cargos.mostrar')->with('mostrar',$mostrar);
    }

    public function edit($id)
    {
        //
        $user = Cargo::find($id);
        return view('cargos.editar',compact('user'));
    }

    public function update(Request $request, $id)
    {
        //
        $actualizar = Cargo::findOrFail($id);
        $actualizar->name = $request->cargos;
        $actualizar->save();
        return redirect('cargos');
    }

    public function destroy($id)
    {
        //
        Cargo::destroy($id);
        return redirect('cargos');
    }

    public function destroydos($id)
    {
        //
        Cargo::destroy($id);
        return redirect('cargos');
    }
}
