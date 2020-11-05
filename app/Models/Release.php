<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
