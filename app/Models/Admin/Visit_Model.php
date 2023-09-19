<?php

namespace App\Models\Admin;

use App\Http\Controllers\Authentication\AuthController;
use App\Models\Member;
use App\Models\users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Admin\users;

class Visit_Model extends Model
{


    protected $table = 'visits';
    protected $primaryKey = 'visits_id';
    protected $fillable = [
        'userid',
        'visits_fname',
        'visits_mname',
        'visits_lname',
        'visits_email',
        'visits_country',
        'visits_province',
        'visits_municipality',
        'visits_brgy',
        'visits_street',
        'visits_zipcode',
        'visits_intended_date',
        'visits_time',
        'gender',
        'contact_no',
        'visits_no_of_visitors',
        'visits_members',
        'visits_name_of_institution',
        'visits_status',
        'file_of_visitors',
        'avatar'
    ];


    public function users()
    {
       return $this->belongsTo(users::class, 'userid', 'user_id');
    }

    public function member()
{
    return $this->hasMany(Member::class, 'member_id');
}


        use HasFactory;
}
