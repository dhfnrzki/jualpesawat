<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Doremon',
            'pekerjaan' => 'developer',
        ];

        return view('home')->with($data);
    }

    public function  contact()
    {
        $nama = "Dhafin Ganteng";
        $pekerjaan = "";
        return view('contact', compact('nama', 'pekerjaan'));
    }
}
