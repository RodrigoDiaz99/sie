<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

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
            'enrollment' => ['string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'semester' => ['string', 'max:255'],
            'career' => ['string', 'max:255'],
            'number' => ['max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'enrollment' => $input['enrollment'],
            'name' => $input['name'],
            'semester' => $input['semester'],
            'career' => $input['career'],
            'number' => $input['number'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ])->assignRole('Student');
    }
}
