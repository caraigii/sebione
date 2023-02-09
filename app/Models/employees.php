<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;

    public $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'company'
    ];
}