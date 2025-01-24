<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename'
    ];

    /**
     * Summary of getImageUrl
     * @return string
     */
    public function getImageUrl(): string
    {
        return Storage::disk('public')->url($this->filename);
    }
    
    /**
     * Summary of booted
     * @return void
     */
    protected static function booted(): void
    {
        static::deleting(function (Picture $picture) {
            Storage::disk('public')
                ->delete($picture->filename);
        });
    }
}
