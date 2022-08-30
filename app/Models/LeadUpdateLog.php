<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadUpdateLog extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table='lead_update_log';
    protected $primaryKey='id';
    protected $fillable = [
        'lead-id',
        'user-id'
    ];
}
