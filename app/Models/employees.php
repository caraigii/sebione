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

    public function createEmployee($data){
        return $this->create($data);
    }

    public function deleteEmployee($id){
        $delete = $this->find($id);
        $delete->delete();
    }

    public function getEmployeeID($id){
        return $this->find($id);
    }

    public function getCompanyID(companies $comp){
        return $this->find($comp->id);
    }

    public function updateEmployee($data, $id){
        $update = $this->find($id);
        $update->update($data);
    }
    //relationship-company
    public function company(){
        return $this->belongsTo(companies::class, 'id');
    }
}
