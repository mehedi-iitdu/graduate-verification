<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Stakeholder;

class Verification extends Model
{
    protected $table = 'verification';

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function stakeholder(){
        return $this->belongsTo(Stakeholder::class);
    }
}
