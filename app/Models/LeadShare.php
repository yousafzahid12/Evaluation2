<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadShare extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='lead_share';
    protected $primaryKey='id';
    protected $fillable = [
        'lead-id',
        'shared-by',
        'share-with',
        'is-active',
    ];
    public function shareaccess()
    {
        return $this->hasMany(ShareAccess::class, 'lead_share_id');
    }
}
