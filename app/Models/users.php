<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    // protected $table = 'users';
    protected $fillable =[
        'user_fname',
        'user_mname',
        'user_lname',
        'user_country',
        'user_province',
        'user_municipality',
        'user_street',
        'user_zipcode',
        'user_email',
        'user_password',
        'status',
        'user_phonenum',
        'account_status',
        'role',
    ];
}
