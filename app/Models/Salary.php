<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    //reverse one to one relationship

    // public function rTeacher(){
    //     return $this->belongsTo(Teacher::class, 'id');
    // }

}
