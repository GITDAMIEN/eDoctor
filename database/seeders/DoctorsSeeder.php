<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctorsjson = File::get("database/data/doctors.json");
        $doctors = json_decode($doctorsjson);

        foreach($doctors as $doctor){
            Doctor::create([
                "first_name" => $doctor->first_name,
                "last_name" => $doctor->last_name,
                "email" => $doctor->email,
                "gender" => $doctor->gender,
                "specialization" => $doctor->specialization,
                "location" => $doctor->location,
            ]);
        }
    }
}
