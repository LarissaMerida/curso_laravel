<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserFormRequest;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->search);
        if($request->search != Null)
            $users = User::where('name', 'LIKE', '%'.$request->search.'%')->get();
        else
            $users = User::get();

        // toSql
        // $users = User::get();
        // dd($users);

        // dd('UserController@index');
        return view('users.index', [
            'users' => $users
        ]);
    }

    public function show($id)
    {
        // $user = User::where('id', '=', $id)->first();
        if(!$user = User::find($id))
            return redirect()->route('users.index');
        // dd($user);

        // dd('users.show', $id);
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserFormrequest $request)
    {
        // dd('cadastrando o usuário');
        // dd($request->all());
        // dd($request->only([
        //     'name', 'email', 'password'
        // ]));


        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();
        
        // $data = $request->all();
        // $data['password'] = bcrypt($request->password);
        // User::create($data);
        dd($request->all());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  bcrypt($request->password)
        ]);
        return redirect()->route('users.index');
        // return redirect()->route('users.show', $user->id);
    }

    public function edit($id)
    {
        if(!$user = User::find($id))
            return redirect()->route('users.index');

        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(UserFormrequest $request, $id)
    {
        // dd($request->all());

        // $user->name = $request->name;
        // $user->save();


        if(!$user = User::find($id))
            return redirect()->route('users.index');


        $data = $request->only('name', 'email');

        if($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);
        return redirect()->route('users.index');
    }
}
