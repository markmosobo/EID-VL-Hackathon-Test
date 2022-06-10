<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vaccine;

class Immunization extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'first_name',
        'last_name',
        'dob',
        'vaccine'
    ];

}
