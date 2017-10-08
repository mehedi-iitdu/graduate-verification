<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class ProgramOffice extends Model
{
    protected $table = 'po';

    public function user(){
    	return $this->belongsTo(User::class);
    } 
}
