<?php

namespace App\Models;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LeadShareAccess extends Model
{
    use HasFactory;
    public $timestamps=true;
    protected $table='lead_share_access';
    protected $primaryKey='id';
    protected $fillable = [
        'lead_id',
        'shared_access_id',
    ];
    public function leads(){
        return $this->hasMany(Lead::class,'id');
    }
}
