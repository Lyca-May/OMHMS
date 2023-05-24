<?php

namespace App\Models\Admin;

use App\Http\Controllers\Authentication\AuthController;
use App\Models\users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Admin\users;

class Visit_Model extends Model
{
    use HasFactory;

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
        'avatar'
    ];


    public function users()
    {
       return $this->belongsTo(users::class, 'userid', 'user_id');
    }

    public function members()
    {
        return $this->hasMany(MembersModel::class);
    }

    protected $table = 'visit';
    protected $primaryKey = 'visits_id';
        use HasFactory;
}
