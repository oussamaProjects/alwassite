<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloc extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
