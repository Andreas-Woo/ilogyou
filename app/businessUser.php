<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

//Trait for sending notifications in laravel
use Illuminate\Notifications\Notifiable;

//Notification for Seller
use App\Notifications\BusinessUserResetPasswordNotification;


class businessUser extends Authenticatable
{

    // This trait has notify() method defined
    use Notifiable;


    //Mass assignable attributes
    protected $fillable = [
        'id', 'name', 'email', 'tel', 'address', 'password',
    ];

    //hidden attributes
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Send password reset notification
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new BusinessUserResetPasswordNotification($token));
    }
}
