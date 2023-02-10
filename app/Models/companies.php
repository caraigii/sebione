<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'email',
        'website',
        'logo'
    ];
    public function createCompany($data){
        return $this->create($data);
    }

    public function deleteCompany($id){
        $delete = $this->find($id);
        $delete->delete();
    }

    public function getCompanyID($id){
        return $this->find($id);
    }

    public function updateCompany($data, $id){
        $update = $this->find($id);
        $update->update($data);
    }

    //relationship-employee
    public function employee(){
        return $this->hasMany(employees::class, 'company');
    }
}
