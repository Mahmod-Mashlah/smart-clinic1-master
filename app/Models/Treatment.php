<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;
    protected $fillable=[
        'clinic_id',
        'doctor_id',
        'patiant_id',
        'report_id',
    ];
}
