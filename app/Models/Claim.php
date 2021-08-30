<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory;
    protected $fillable = ['objet', 'message'];

    public function claim_type()
    {
        return $this->belongsTo(ClaimType::class, 'claimType_id');
    }
}
