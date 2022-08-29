<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\UserType as Authenticatable;

class UserType extends Model
{
    use HasFactory;
    public $timestamps=true;
    protected $table='usertypes';
    protected $primaryKey='users_type_id';
    protected $fillable = [
        'users_type_id',
        'type',
    ];
    public function users(){
        return $this->belongsTo(User::class);
    }
}
