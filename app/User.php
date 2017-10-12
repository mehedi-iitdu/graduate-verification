<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\User_activation;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    public function role(){
        return $this->belongsTo(Role::class);
    }


    public function user_activation(){
        return $this->hasOne(User_activation::class);
    }


    public function hasRole($roles){
        return in_array($this->role->role_name, $roles);
    }

    public function isUGC(){
        return $this->role->role_name == 'UGC';
    }

    public function isRegistrar(){
        return $this->role->role_name == 'Registrar';
    }

    public function isProgramOffice(){
        return $this->role->role_name == 'ProgramOffice';
    }

    public function isStudent(){
        return $this->role->role_name == 'Student';
    }




}
