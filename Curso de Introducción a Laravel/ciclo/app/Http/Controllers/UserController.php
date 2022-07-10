<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        /**
         * Users igual a un método que trae a todos los usuarios para finalmente usar get
         */
        $users = User::latest()->get();
        /**
         * 1. Consulto los datos
         * 2. Paso los datos
         */
        return view('users.index', [
            'users' => $users
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'unique:users'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        /**
         * Rtorna a la vista anterior 
         */
        return back();
    }
    public function destroy(User $user)
    {
        $user->delete();

        return back();
    }
}
