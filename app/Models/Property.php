<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->BelongsTo(Owner::class);
    }

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function bloc()
    {
        return $this->BelongsTo(Bloc::class);
    }

    public function pays()
    {
        return $this->hasMany(Pay::class);
    }
}
