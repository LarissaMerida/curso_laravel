<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController2 extends Controller
{
    //
    public function index()
    {
        // dd('Olá');
        $users = User::get();
        // dd($users);

        return view('users2.index', [
            'users' => $users
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);
    }
}
