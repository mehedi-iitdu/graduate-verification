<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Student;

class Permission extends Model
{
    protected $table = 'permission';

    public function user(){
        return $this->hasOne(User::class);
    }

    public function student(){
        return $this->hasOne(Student::class);
    }


}
