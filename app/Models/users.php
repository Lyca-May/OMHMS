<?php

namespace App\Models;

use App\Models\Admin\Visit_Model;
use App\Models\Images;
use App\Models\User\Newsfeed_Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    // protected $table = 'users';
    protected $fillable =[
        'user_id',
        'user_fname',
        'user_mname',
        'user_lname',
        'gender',
        'birthdate',
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

    public function visits()
    {
        return $this->hasMany(Visit_Model::class);
    }
    public function images()
    {
        return $this->hasMany(Images::class);
    }
    public function feed()
    {
        return $this->hasMany(Feed_Model::class);
    }
}
