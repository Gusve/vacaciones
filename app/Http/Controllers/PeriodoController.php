<?php

namespace App\Http\Controllers;

use App\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{

    public function index()
    {
        // 
        $variables = Periodo::all();
        return view('Periodo.index',compact('variables'));

        //$periodo =>periodo::orderBy('id', 'Asc')=>paginate(5);
       

    }
    public function create()
    {
        return view('periodo.add');
    }

    public function store(Request $request)
    {
        //
        $guardar = new Periodo;
        $guardar->name = $request->name;
        $guardar->save();
        return redirect('users');
        
    }
    
    public function show($id)
    {
        //
        $mostrar = Periodo::find($id);
        return view('Periodo.mostrar')->with('mostrar',$mostrar);
    }

    public function edit($id)
    {
        //
        $user = Cargo::find($id);
        return view('Periodo.editar',compact('user'));
    }

    public function update(Request $request, $id)
    {
        //
        $actualizar = Periodo::findOrFail($id);
        $actualizar->name = $request->Periodo;
        $actualizar->save();
        return redirect('Periodo');
    }

    public function destroy($id)
    {
        //
        Periodo::destroy($id);
        return redirect('Periodo');
    }

    public function destroydos($id)
    {
        //
        Periodo::destroy($id);
        return redirect('Periodo');
    }
}
