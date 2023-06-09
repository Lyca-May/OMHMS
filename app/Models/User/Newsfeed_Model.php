<?php

namespace App\Models\User;

// use App\Models\users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\users;
class Newsfeed_Model extends Model
{
    protected $table = 'newsfeed';
    protected $primaryKey = 'feed_id';
    use HasFactory;
    protected $fillable = [
        'userid',
        // 'name',
        'post',
        'comment',
        // 'date_posted',
        'image',
        'status',
    ];
    protected $hidden = ['users'];

    public function user()
    {
        return $this->belongsTo(users::class);
    }
    public function comments()
    {
        return $this->belongsTo(Comments_Model::class);
    }
}
