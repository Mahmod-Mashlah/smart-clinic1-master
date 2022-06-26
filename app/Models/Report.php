<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable=[
        'clinic_id',
        'doctor_id',
        'patiant_id',
        'secretarie_id',
        'lap_id',

    ];
}
