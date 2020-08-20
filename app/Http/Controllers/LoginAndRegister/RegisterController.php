<?php

namespace App\Http\Controllers\LoginAndRegister;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {
        auth()->logout();

        return redirect()->to('login');
    }


    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create($request->all());

        auth()->login($user);

        return redirect()->to('/index');

    }

}
