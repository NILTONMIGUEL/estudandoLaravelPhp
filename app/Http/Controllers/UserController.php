<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.usuarios');
    }

    public function create(){
        return view('admin.cadastro-usuario');
    }
    
    public function edit(User $user){
        return view('admin.cadastro-usuario',[
            'user' => $user,
        ]);
    }
}
