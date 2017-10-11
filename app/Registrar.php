<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Registrar extends Model
{
    protected $table = 'registrar';

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
