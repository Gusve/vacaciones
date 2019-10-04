<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller{

    public function index()
    {
        $users = User::all();
        return view('usuarios.index',compact('users'));
    //$users => user::orderBy('id', 'Asc')=>paginate(5);
    }


    public function create()
    {
        return view('usuarios.add');
    }

    public function store(Request $request)
    {
        //
        $guardar = new User;
        $guardar->name = $request->name;
        $guardar->email = $request->email;
        $guardar->password = bcrypt($request->password);
        $guardar->save();
        return redirect('users');
        
    }

    public function show($id)
    {
        //
        $mostrar = User::find($id);
        return view('usuarios.mostrar')->with('mostrar',$mostrar);
    }

    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('usuarios.editar',compact('user'));
    }

    public function update(Request $request, $id)
    {
        //
        $actualizar = User::findOrFail($id);
        $actualizar->name = $request->usuarios;
        $actualizar->email = $request->email;
        $actualizar->save();
        return redirect('users');
    }

    public function destroy($id)
    {
        //
        User::destroy($id);
        return redirect('users');
    }

    public function destroydos($id)
    {
        //
        User::destroy($id);
        return redirect('users');
    }
}
