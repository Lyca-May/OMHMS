<?php

namespace App\Models\User;

use App\Models\users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsfeed_Model extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'post',
        'comment',
        // 'date_posted',
        'image',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(users::class);
    }
}
