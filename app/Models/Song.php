<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\Release;

class Song extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'track_number',
        'title',
        'artist',
        'composer',
        'lyrics',
        'genre',
        'language',
        'instrumental',
        'explicit',
        'file',
        'original_filename',
        'release_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id3'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'song_url',
    ];

    /**
     * Get the release that is associated with this song.
     *
     */
    public function release()
    {
        return $this->belongsTo(Release::class);
    }

    /**
     * Get ID3 data for song from DB
     *
     * @return array
     */
    public function getID3() : array
    {
        return json_decode($this->id3, true);
    }

        /**
     * Get the URL to the Song.
     *
     * @return string
     */
    public function getSongUrlAttribute()
    {
        return $this->file
            ? Storage::url($this->file)
            : '';
    }
}
