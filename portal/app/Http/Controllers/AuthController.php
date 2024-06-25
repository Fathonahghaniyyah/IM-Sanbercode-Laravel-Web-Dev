<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar()
    {
        return view('register');
    }
    public function welcome(Request $request)
    {
        // dd($request);
        // dd($request->input('fname'));
        $namaDepan = $request->input('fname');
        $namaBelakang = $request->input('lname');

        return view('welcome', ["namaDepan" => $namaDepan, "namaBelakang" => $namaBelakang]);
    }
}
