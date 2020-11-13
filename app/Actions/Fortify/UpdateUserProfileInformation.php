<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'company' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:48'],
            'address' => ['nullable', 'string'],
            'paypal_email' => ['nullable', 'email'],
            'bank_account_info' => ['nullable', 'string'],
            'photo' => ['nullable', 'image', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'company' => $input['company'],
                'phone' => $input['phone'],
                'email' => $input['email'],
                'address' => $input['address'],
                'paypal_email' => $input['paypal_email'],
                'bank_account_info' => $input['bank_account_info']
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'company' => $input['company'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'email_verified_at' => null,
            'address' => $input['address'],
            'paypal_email' => $input['paypal_email'],
            'bank_account_info' => $input['bank_account_info']
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
