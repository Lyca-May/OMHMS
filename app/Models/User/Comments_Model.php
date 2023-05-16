<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments_Model extends Model
{
    protected $table = 'comments';
    use HasFactory;
    protected $fillable = [
        'userid',
        'feed_id',
        'comment_text',
    ];
    protected $hidden = ['newsfeed'];

    public function user()
    {
        return $this->belongsTo(Newsfeed_Model::class);
    }
}
