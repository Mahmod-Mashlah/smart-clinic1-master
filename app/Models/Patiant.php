<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patiant extends Model
{
    use HasFactory;
    protected $fillable=[
        'Careear',
        'weigh',
        'clinic_id',
        'stutas',
        'user_id',
    ];


}
