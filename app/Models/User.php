<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Address;
use App\Models\Properties;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Middleware\TrustHosts;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'color',
        'nbOfProperty',
        'revenue1',
        'revenue2',
        'revenue3',
        'date_creation',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

   
    public function user_properties()
    {
        return $this->hasMany(Properties::class);
    }
    //permet de classer les biens par ville avec Nice en premier et un classement avec les autres ville par ordre alphabetique
    public function user_properties_with_addresses()
    {
        return $this->hasMany(Properties::class, 'user_id')->with('address')
            ->join('address', 'properties.address_id', '=', 'address.id')
            ->orderByRaw("CASE WHEN address.city = 'Nice' THEN 1 ELSE 2 END")
            ->orderBy('address.city')
            ->select('properties.*');
    }
   
}


