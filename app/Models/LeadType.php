<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadType extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table='lead_type';
    protected $primaryKey='id';
    protected $fillable = [
       'name',
    ];

}
