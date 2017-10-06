<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }


    public function hasRole($role){
        return $this->role->role_name == $role;
    }

    public function isUGC(){
        return $this->role->role_name == 'UGC';
    }

    public function isRegister(){
        return $this->role->role_name == 'Register';
    }

    public function isStudent(){
        return $this->role->role_name == 'Student';
    }




}
