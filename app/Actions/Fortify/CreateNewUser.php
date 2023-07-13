<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Carbon\Carbon;

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
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'address' => ['required' , 'string'],
            'color' => ['required' , 'string'],
            'nbOfProperty' => ['numeric'],
            'revenue1' => ['numeric'],
            'revenue2' => ['numeric'],
            'revenue3' => ['numeric'],
            'date_creation' => ['date_format:Y-m-d'],

        ])->validate();
            
         return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'address' => $input['address'],
            'color' => $input['color'],
            'nbOfProperty' => 0,
            'revenue1' => $input['revenue1'],
            'revenue2' => $input['revenue2'],
            'revenue3' => $input['revenue3'],
            'date_creation' => Carbon::createFromFormat('Y-m-d', $input['date_creation']),
        ]);
        
    }
}
