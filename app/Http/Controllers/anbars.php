<?php

namespace App\Http\Controllers;
use App\Models\Anbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class anbars extends Controller
{
        
    public function index()
    {
      $anbars=Anbar::orderby('id','ASC')->get();

      echo $anbars->adi;
    //return view('home',compact('anbar'));
    }


}



