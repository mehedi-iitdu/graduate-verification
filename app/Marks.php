<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Course;

class Marks extends Model
{
    protected $table = 'mark';

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

}
