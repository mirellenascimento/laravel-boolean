<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DopoController extends Controller
{
  public function index(){
    return view('dopo')
  }
}
