<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    /**
     * Get the ads for the region.
     */
    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
}
