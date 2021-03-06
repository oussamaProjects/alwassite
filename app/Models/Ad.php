<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ad extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'texte',
        'category_id',
        'city_id',
        'user_id',
        'departement',
        'commune',
        'commune_name',
        'commune_postal',
        'pseudo',
        'email',
        'limit',
        'active',
    ];
    /**
     * Get the region that owns the ad.
     */
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    /**
     * Get the category that owns the ad.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get all of the photod for the Ad
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos(): HasMany
    {
        return $this->hasMany(Upload::class, 'ad_id', 'id');
    }

    /**
     * Get the city for the ad.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }


    /**
     * Get the user for the ad.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
