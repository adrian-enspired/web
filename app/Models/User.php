<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Creativeorange\Gravatar\Facades\Gravatar;
use App\Traits\Encryptable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use Encryptable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'company',
        'phone',
        'admin',
        'address',
        'paypal_email',
        'bank_account_info',
        'google_id',
        'instagram_id',
        'twitter_id',
        'linkedin_id',
        'yahoo_id',
        'yandex_id',
        'vkontakte_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be encrypted
     *
     * @var array
     */
    protected $encryptable = [
        'bank_account_info'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the default profile photo URL if no profile photo has been uploaded.
     *
     * @return string
     */
    protected function defaultProfilePhotoUrl() : string
    {
        return ($this->email && Gravatar::exists($this->email)) ?
            Gravatar::get($this->email) :
            'https://ui-avatars.com/api/?name='.urlencode($this->name).'&color=7F9CF5&background=EBF4FF';
    }

    /**
     * Get color of admin label
     */
    public function getAdminColorAttribute() : string {
        return $this->admin ? 'green' : 'red';
    }

    /**
     * Get the songs that are associated with this release.
     *
     */
    public function releases()
    {
        return $this->hasMany(Release::class);
    }
}
