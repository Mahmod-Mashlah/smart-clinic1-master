<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAdate extends Model
{
    use HasFactory;
    protected $fillable = [
        'Day',
        'Date',
        'time',
        'Doctor_id',
        'Clinic_id',
        'Patiant_id',
       
    ];
}
