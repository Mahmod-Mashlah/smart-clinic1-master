<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internal_procedures extends Model
{
    use HasFactory;
    protected $fillable=[
        'examinations_id',
        'treatment_id',
       
    ];



}
