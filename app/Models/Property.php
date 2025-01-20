<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $desciption
 * @property int $surface
 * @property int $rooms
 * @property int $bedrooms
 * @property int $floor
 * @property int $price
 * @property string $city
 * @property string $address
 * @property string $postal_code
 * @property int $sold
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property query()
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereBedrooms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereDesciption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereFloor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereRooms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereSold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereSurface($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'surface',
        'rooms',
        'bedrooms',
        'floor',
        'price',
        'city',
        'address',
        'postal_code',
        'sold'
    ];

    /**
     * Summary of options
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function options()
    {
        return $this->belongsToMany(Option::class);
    }
}
