<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $primaryKey = 'category_id';
    protected $fillable = [
        // 'category_id',
        'userid',
        'category_name',
        'category_description',
        'category_type',
        'is_archived',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(users::class);
    }
}
