<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use App\Models\Song;
use App\Models\User;

class Release extends Model
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
        'artwork',
        'status',
        'user_id'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'release_artwork_url',
    ];

    /**
     * Get the songs that are associated with this release.
     *
     */
    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    /**
     * Get the user that is associated with this release.
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get color of admin label
     */
    public function getStatusColorAttribute() : string
    {
        switch ($this->status) {
            case "In Progress":
                return 'yellow';
            case "Published":
                return 'green';
            case "Removed":
                return 'red';
            default:
                return 'cyan';
        }
    }

    /**
     * Get the URL to the release artwork.
     *
     * @return string
     */
    public function getReleaseArtworkUrlAttribute()
    {
        return $this->artwork
            ? Storage::url($this->artwork)
            : Storage::url('default_release.jpg');
    }
}
