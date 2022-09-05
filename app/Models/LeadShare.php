<?php

namespace App\Models;

use App\Models\Lead;
use App\Models\User;
use App\Models\ShareAccess;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LeadShare extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='lead_share';
    protected $primaryKey='id';
    protected $fillable = [
        'lead_id',
        'shared_by',
        'share_with',
        'is_active',
    ];
    public function shareaccess()
    {
        return $this->hasMany(ShareAccess::class, 'lead_share_id');
    }
    public function leads()
    {
        return $this->belongsTo(Lead::class,'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class,'id');
    }
}
