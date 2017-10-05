<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\University;
use App\Student;

class Department extends Model
{
    protected $table = 'department';

    public function university(){
        return $this->belongsTo(University::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }

}
