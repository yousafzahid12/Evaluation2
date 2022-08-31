<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadContents extends Model
{
    use HasFactory;
    public function leads()
    {
        return $this->belongsTo(Lead::class, 'id');
    }
}
