<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Verification;

class Stackholder extends Model
{
    protected $table = 'stackholder';

    public function verifications(){
    	return $this->hasMany(Verification::class);
    }

}
