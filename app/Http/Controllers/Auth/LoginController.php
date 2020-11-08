<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function handleGoogleCallback()
    {
        try {
            //create a user using socialite driver google
            $user = Socialite::driver('google')->user();
            // if the user exits, use that user and login
            $finduser = User::where('google_id', $user->id)->first();
            if (! $finduser) {
              $finduser = User::where('email', $user->email)->first();
            }
            if ($finduser) {
                //if the user exists, login and show dashboard
                Auth::login($finduser);
                if (! $finduser->google_id) {
                  $finduser->google_id = $user->id;
                  $finduser->save();
                }
                return redirect('redirects');
            } else {
                //user is not yet created, so create first
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    // @TODO REMOVE ME
                    'admin' => true,
                    'google_id'=> $user->id,
                    'password' => encrypt('')
                ]);

                $newUser->save();
                //login as the new user
                Auth::login($newUser);
                // go to the dashboard
                return redirect('redirects');
            }
            //catch exceptions
        } catch (Exception $e) {
            return redirect('user/login');
        }
    }

    /**
     * Redirect the user to the Facebook authentication page
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            //create a user using socialite driver facebook
            $user = Socialite::driver('facebook')->user();
            // if the user exits, use that user and login
            $finduser = User::where('facebook_id', $user->id)->first();
            if (! $finduser) {
              $finduser = User::where('email', $user->email)->first();
            }
            if ($finduser) {
                //if the user exists, login and show dashboard
                Auth::login($finduser);
                if (! $finduser->facebook_id) {
                  $finduser->facebook_id = $user->id;
                  $finduser->save();
                }
                return redirect('redirects');
            } else {
                //user is not yet created, so create first
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    // @TODO REMOVE ME
                    'admin' => true,
                    'facebook_id'=> $user->id,
                    'password' => encrypt('')
                ]);

                $newUser->save();
                //login as the new user
                Auth::login($newUser);
                // go to the dashboard
                return redirect('redirects');
            }
            //catch exceptions
        } catch (Exception $e) {
            return redirect('user/login');
        }
    }
}
