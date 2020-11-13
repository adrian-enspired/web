<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;

class LoginController extends Controller
{

    /** @var array Supported providers */
    const SUPPORTED_PROVIDERS = [
        'google',
        'instagram',
        'yahoo',
        'vkontakte',
        'yandex'
    ];

    /**
     * Redirect to specified provider
     *
     * @param string $provider
     */
    public function redirectToProvider(string $provider)
    {
        if (! in_array($provider, self::SUPPORTED_PROVIDERS)) {
            abort(404);
        }

        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain user information from provider
     *
     * @param string $provider
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function handleProviderCallback(string $provider)
    {
        if (! in_array($provider, self::SUPPORTED_PROVIDERS)) {
            abort(404);
        }

        try {
            $social_user = Socialite::driver($provider)->user();
            $id_field = "{$provider}_id";

            // check our ID fields first
            $user = User::where($id_field, $social_user->id)->first();
            // Now check against email addresses
            if (! $user) {
                $user = User::where('email', $social_user->email)->first();
            }

            // Still nothing? Create the user
            if (! $user) {
                $user = User::create([
                    'name' => $social_user->name,
                    'email' => $social_user->email,
                    // @TODO REMOVE ME
                    'admin' => true,
                    $id_field => $social_user->id,
                    'password' => encrypt('')
                ]);
                $user->save();
            }

            // Login, and redirect to applicable dashboard
            Auth::login($user);
            return redirect('redirects');
        } catch (Exception $e) {
            // Something failed, send back to login screen
            return redirect('/login');
        }
    }
}
