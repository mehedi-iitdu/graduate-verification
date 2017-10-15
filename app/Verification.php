<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Stakeholder;
use App\User;

class Verification extends Model
{
    protected $table = 'verification';

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function stakeholder(){
        return $this->belongsTo(Stakeholder::class);
    }
}
