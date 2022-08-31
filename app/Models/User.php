<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\UserType;
use Illuminate\Auth\Passwords\CanResetPassword;

class User extends Authenticatable implements MustVerifyEmail,\Illuminate\Contracts\Auth\CanResetPassword
{
    use  HasFactory;
    use Notifiable;
    public $timestamps=true;
    protected $table='users';
    protected $primaryKey='id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    protected $casts = [

        'email_verified_at' => 'datetime',
    ];
    public function usertypes(){
        return $this->belongsTo(UserType::class,'users_type_id');
    }
}
