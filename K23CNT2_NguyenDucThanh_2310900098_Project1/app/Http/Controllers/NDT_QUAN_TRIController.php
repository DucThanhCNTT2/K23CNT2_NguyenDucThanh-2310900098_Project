<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NDT_QUAN_TRIController extends Controller
{
   //GET: login (authentication)
    public function nvkLogin(){
        return view('NdtLogin.nst-login');
    }
    //POST: login (authentication)
    public function nvkLoginSubmit(Request $request){
        return view('NdtLogin.ndt-login');
    }
}
