<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function allDoctors(){

        $allDoctors = Doctor::orderBy('created_at','Desc')->paginate(30);
        
        return view('allDoctors', compact('allDoctors'));
    }

    public function newDoctor(){
        return view('newDoctor');
    }

    public function aboutUs(){
        return view('aboutUs');
    }
}
