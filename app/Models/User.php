<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'password'

    ];
    protected $hidden = [
        'password'
    ];

    

}
