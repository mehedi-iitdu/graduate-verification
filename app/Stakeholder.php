<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Verification;

class Stakeholder extends Model
{
    protected $table = 'stakeholder';

    public function verifications(){
    	return $this->hasMany(Verification::class);
    }

}
