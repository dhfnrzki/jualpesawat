<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkinCareController extends Controller
{
    public function login(){
        return view('/SkinCare/login');
    }
    public function dashboard(){
        return view('/SkinCare/dashboard');
    }
    public function listskincare(){
        return view('/SkinCare/listskincare');
    }
}
