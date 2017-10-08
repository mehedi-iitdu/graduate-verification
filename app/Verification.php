<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Stackholder;

class Verification extends Model
{
    protected $table = 'verification';

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function stackholder(){
        return $this->belongsTo(Stackholder::class);
    }
}
