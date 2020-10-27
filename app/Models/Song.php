<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Album;

class Song extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'file',
        'best',
        'album_id'
    ];

    /**
     * Get the album that is associated with this song.
     *
     */
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
