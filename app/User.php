<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    // public function isAdmin(){
    //     return $this->role == 'admin';
    // }

    // public function isCustomer(){
    //     return $this->role == 'customer';
    // }
    // public function isShipper(){
    //     return $this->role == 'shipper';
    // }
}
