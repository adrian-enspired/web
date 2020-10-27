<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Album;

class Artist extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'photo',
        'url',
        'bio',
        'user_id'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'albums'
    ];

    /**
     * Get the user that is associated with this artist.
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the albums that are associated with this artist.
     *
     */
    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function getAlbumsAttribute() {
        return $this->albums();
    }
}
