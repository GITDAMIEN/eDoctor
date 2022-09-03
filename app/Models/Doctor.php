<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Doctor extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ["first_name","last_name","email","gender","specialization","location", "user_name"];

    // PER TNTSEARCH
    
    // public function toSearchableArray()
    // {
    //     $array = [
    //         "id" => $this->id,
    //         "first_name" => $this->first_name,
    //         "last_name" => $this->last_name,
    //         "email" => $this->email,
    //         "specialization" => $this->specialization,
    //         "location" => $this->location,
    //     ];

    //     return $array;
    // }

    public function user(){
        return $this->belongsTo(User::class);
    }
}