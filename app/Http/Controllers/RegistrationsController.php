<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationsController extends Controller
{
  public function __construct(){
    $this->middleware('guest', ['except' => 'destroy']);
  }
  
  public function create(){
    return view('auth/register');
  }

  public function store(){
    $this->validate(request(),[
      'name' => 'required|unique:users',
      'email' => 'required|email||unique:users',
      'password' => 'required|confirmed|min:7'
    ]);
    $user = User::create(request(['name', 'email', 'password']));
    auth()->login($user);
    return redirect('/');
  }
}
