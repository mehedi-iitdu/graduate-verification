<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Marks;
class Course extends Model
{
    //
    protected $table = 'course';
    protected $fillable = ['name' , 'code' , 'credit'];

    public function marks(){
    	return $this->hasMany(Marks::class);
    }
    
}
