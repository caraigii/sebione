<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;

    // protected $table = 'employees';
    // protected $primarykey = 'id';
    public $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'company'
    ];

    public function createEmployee($data){
        return $this->create($data);
    }

    function getEmployees(){
        return $this->all();
    }
}
