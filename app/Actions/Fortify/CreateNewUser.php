<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'company' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:48'],
            'password' => $this->passwordRules(),
            'terms' => ['required', 'accepted']
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'company' => $input['company'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
