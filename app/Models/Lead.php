<?php

namespace App\Models;

use App\Models\LeadShareAccess;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lead extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='leads';
    protected $primaryKey='id';
    protected $fillable = [
        'name',
        'lead_type',
        'created_by',
    ];
        public function leadtypes()
        {
        return $this->belongsTo(LeadType::class,'id');
    }
    public function leadcontents()
    {
        return $this->hasMany(LeadContents::class, 'lead_id');
    }
    public function leadshare()
    {
        return $this->hasMany(LeadShare::class, 'lead_id');
    }
    public function leadshareaccess()
    {
        return $this->hasMany(LeadShareAccess::class, 'lead_id');
    }




}
