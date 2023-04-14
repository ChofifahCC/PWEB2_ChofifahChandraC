<?php

namespace App\Http\Controllers\otentikasi;

use resources\views\auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtentikasiController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        dd($request->all());
    }
}
