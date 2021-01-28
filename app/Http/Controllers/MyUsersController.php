<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyUsers;

class MyUsersController extends Controller
{
    public function index(){
      $dataUsers = MyUsers::all();
      return view('users', compact('dataUsers'));
    }

    public function show($id){
      $user = MyUsers::find($id);
      return view('user', compact('user'));
    }
}
