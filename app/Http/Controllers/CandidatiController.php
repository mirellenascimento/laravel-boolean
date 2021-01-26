<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatiController extends Controller
{
  public function index(){
    return view('candidati')
  }
}
