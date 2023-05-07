<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembersModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'visit_id',
        'members_fname',
        'members_mname',
        'members_lname',
        'members_age',
        'members_gender',
    ];
    public function visits()
    {
        return $this->hasMany(Visit_Model::class);
    }
}
