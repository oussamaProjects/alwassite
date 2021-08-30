<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function localisation()
    {
        return $this->belongsTo(Localisation::class);
    }
    public function blocs()
    {
        return $this->hasMany(Bloc::class);
    }
}
