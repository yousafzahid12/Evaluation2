<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareAccess extends Model
{
    use HasFactory;
    public $timestamps=true;
    protected $table='share_access';
    protected $primaryKey='id';
    protected $fillable=[
        'id',
        'action',
    ];
    public function leadshare()
    {
        return $this->belongsTo(LeadShare::class, 'id');
    }
}
