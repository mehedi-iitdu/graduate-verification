<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User_activation;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'user';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */



    public function user_activation(){
        return $this->hasOne(User_activation::class);
    }


    public function hasRole($roles){
        return in_array($this->role, $roles);
    }

    public function isUGC(){
        return $this->role == 'UGC';
    }

    public function isRegistrar(){
        return $this->role == 'Registrar';
    }

    public function isProgramOffice(){
        return $this->role == 'ProgramOffice';
    }

    public function isStudent(){
        return $this->role == 'Student';
    }




}
