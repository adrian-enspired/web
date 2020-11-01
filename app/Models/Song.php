<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        'title',
        'artist',
        'composer',
        'lyrics',
        'genre',
        'language',
        'instrumental',
        'explicit',
        'file',
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
}
