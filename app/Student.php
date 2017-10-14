<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\University;
use App\Department;
use App\Marks;
use App\Verification;

class Student extends Model
{
    protected $table = 'student';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function university(){
        return $this->belongsTo(University::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function marks(){
    	return $this->hasMany(Marks::class);
    }

    public function verifications(){
    	return $this->hasMany(Verification::class);
    }
        
}
