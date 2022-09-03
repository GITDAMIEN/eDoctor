<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EditDoctorRequest;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function newDoctor(){
        return view('newDoctor');
    }

    public function createDoctor(DoctorRequest $request)
    {

        $user = Auth::user();
        $user->doctors()->create([
            "first_name" => $request->input('first_name'),
            "last_name" => $request->input('last_name'),
            "email" => $request->input('email'),
            "gender" => $request->input('gender'),
            "specialization" => $request->input('specialization'),
            "location" => $request->input('location'),
        ]);

        if($request->input('gender') == 'Female')
            $mess = 'Dottoressa aggiunta correttamente';
        elseif($request->input('gender') == 'Male')
            $mess = 'Dottore aggiunto correttamente';
        else
            $mess = 'Dottor* aggiunt* correttamente';

        return redirect()->route('allDoctors')->with('message', $mess);
    }

    public function editDoctor(Doctor $doctor){
        return view('editDoctor', compact('doctor'));
    }

    public function submitChanges(EditDoctorRequest $editDoctorRequest, Doctor $doctor){
        
           $doctor->first_name = $editDoctorRequest->input('first_name');
           $doctor->last_name = $editDoctorRequest->input('last_name');
           $doctor->email = $doctor->email;
           $doctor->gender = $editDoctorRequest->input('gender');
           $doctor->specialization = $editDoctorRequest->input('specialization');
           $doctor->location = $editDoctorRequest->input('location');
           $doctor->save();

           if($editDoctorRequest->input('gender') == 'Female')
                $mess = 'Dottoressa modificata correttamente';
            elseif($editDoctorRequest->input('gender') == 'Male')
                $mess = 'Dottore modificato correttamente';
            else
                $mess = 'Dottor* modificat* correttamente';

        return redirect()->route('doctorDetails', $doctor)->with('message', $mess);
    }

    public function deleteDoctor(Doctor $doctor){

        if($doctor->gender == 'Female')
            $mess = 'Dottoressa eliminata correttamente';
        elseif($doctor->gender == 'Male')
            $mess = 'Dottore eliminato correttamente';
        else
            $mess = 'Dottor* eliminat* correttamente';

        $doctor->delete();

        return redirect()->route('allDoctors')->with('message', $mess);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
