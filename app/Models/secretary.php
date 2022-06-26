<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secretary extends Model
{
    use HasFactory;
    protected $fillable=[
        'TypingSpeed',
        'expirance',
        'employee_id',
    ];
}
