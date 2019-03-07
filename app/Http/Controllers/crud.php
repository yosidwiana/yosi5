<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class crud extends Controller
{
    //
    public function index(){
        $hasil = User::all();
        return view('lihatdata',['lihat'=>$hasil]);
    }
}
