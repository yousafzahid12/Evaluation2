<?php

namespace App\Models;

use App\Models\UserType;
use App\Models\LeadShare;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        'file'
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
    public function lead_share(){
        return $this->hasMany(LeadShare::class,'shared_by');
    }

}
