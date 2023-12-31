<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     * @param string $provider
     * @param array $providerUser
     * @return \App\Models\User
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' =>'required|regex:/(0)[0-9]{9}/',
            'password' => $this->passwordRules(),
        ])->validate();
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' =>$input['phone'],
            'password' => Hash::make($input['password']),
        ]);

    }


}

