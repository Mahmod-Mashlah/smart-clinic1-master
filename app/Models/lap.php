<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lap extends Model
{
    use HasFactory;
    protected $fillable=[
        'expirance',
        'status',
        'employee_id',
    ];


}
