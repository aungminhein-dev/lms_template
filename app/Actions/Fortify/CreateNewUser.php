<?php

namespace App\Actions\Fortify;

use Carbon\Carbon;
use App\Models\User;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:20'],
            'date_of_birth' => ['required', 'date_format:d-M-Y'],
            'region' => ['required', 'string', 'max:100'],
            'township' => ['required', 'string', 'max:100'],
            'password' => ['required', 'string', 'min:6'],
        ])->validate();

        // Format the date of birth
        $dob = Carbon::createFromFormat('d-M-Y', $input['date_of_birth'])->format('Y-m-d');

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'date_of_birth' => $dob,
            'region' => $input['region'],
            'township' => $input['township'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
