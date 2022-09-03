<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorRequest;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function allDoctors(){

        $allDoctors = Doctor::orderBy('created_at','Desc')->paginate(30);
        
        return view('allDoctors', compact('allDoctors'));
    }

    public function searchDoctor(Request $request){
        $allDoctors = Doctor::search($request->searchBox)->paginate(30);

        return view('allDoctors', compact('allDoctors'));
    }

    public function aboutUs(){
        return view('aboutUs');
    }
    
    public function contactUs(){
        return view('contactUs');
    }
    
    public function doctorDetails(Doctor $doctor){

        return view('doctorDetails', compact('doctor'));
    }

    public function contactForm(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $contact = compact('name', 'email', 'message');

        Mail::to($request->input('email'))->send(new ContactMail($contact));
        Mail::to('admin@edoctor.it')->send(new AdminMail($contact));

        return redirect()->back()->with('message', 'Grazie per averci contattato! Ti risponderemo entro 48h.');
    }

}
