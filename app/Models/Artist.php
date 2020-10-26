<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

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
        'bio'
    ];

    /**
     * Get the user that is associated with this artist.
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
