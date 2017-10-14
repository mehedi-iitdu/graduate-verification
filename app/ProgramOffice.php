<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class ProgramOffice extends Model
{
    protected $table = 'program_office';

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
