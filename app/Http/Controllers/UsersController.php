<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

use App\Http\Requests;

class UsersController extends Controller
{
    //
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.form');
    }

    public function store(Request $request)
    {
        //$user = User::find(2);

        $user = User::create([
            'name' => $request->name,
            'id' => $request->id,
            'email' => $request->email,
            'password' => $request->pass,
        ]);

        return redirect('/users');
    }

}