<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription_medicine extends Model
{
    use HasFactory;
    protected $fillable=[
        'medicine_id',
        'prescription_id',
    ];


}
