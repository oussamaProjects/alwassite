<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function owner()
    {
        return $this->hasOne(Owner::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function payments()
    {
        return $this->hasMany(Pay::class);
    }

    public function claims()
    {
        return $this->hasMany(Claim::class, 'user_id');
    }
    /**
     * Get the ads for the user.
     */
    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
}
