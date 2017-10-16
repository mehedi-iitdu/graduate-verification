<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\University;

class Registrar extends Model
{
    protected $table = 'registrar';

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function university(){
        return $this->belongsTo(University::class);
    }
}
