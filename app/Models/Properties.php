<?php

namespace App\Models;


use App\Models\User;
use App\Models\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Properties extends Model
{
    use HasFactory;

    protected $table = 'properties';

    protected $fillable = [
        'type',
        'nom',
        'user_id',
        'address_id',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }

    
}
