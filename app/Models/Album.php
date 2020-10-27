<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Song;
use App\Models\Artist;

class Album extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'genre',
        'cover',
        'status',
        'best',
        'artist_id'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'songs'
    ];

    /**
     * Get the songs that are associated with this album.
     *
     */
    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    /**
     * Get the artist that is associated with this album.
     *
     */
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function getSongsAttribute() {
        return $this->songs();
    }
}
