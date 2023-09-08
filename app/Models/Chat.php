<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // the user who sent the message
        'message', // the chat message content
    ];
    public function user()
{
    return $this->belongsTo(users::class);
}

}
