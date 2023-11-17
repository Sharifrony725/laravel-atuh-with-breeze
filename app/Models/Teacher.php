<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    //one to one relationship

    // public function rSalary(){
    //     return $this->hasOne(Salary::class);
    // }

    //one to may relation

    public function rSalary(){
        return $this->hasMany(Salary::class);
    }

}
