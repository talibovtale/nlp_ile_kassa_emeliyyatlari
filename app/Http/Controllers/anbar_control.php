<?php

namespace App\Http\Controllers;
use App\Models\Anbar;
use Illuminate\Http\Request;


class anbar_control extends Controller
{
    public function index()
    {
      $anbar=Anbar::orderby('tarix','DESC')->get();

    
    return view('home',compact('anbar'));
    }

}
