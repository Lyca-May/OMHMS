<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SouvenirsModel extends Model
{
    use HasFactory;

    protected $table = 'souvenir';
    protected $primaryKey = 'souvenir_id';

    protected $fillable = [
        'userid',
        'category_id',
        'souvenir_name',
        'souvenir_qty',
        'souvenir_price',
        'souvenir_description',
        'souvenir_municipality',
        'souvenir_status',
        'souvenir_image',
        'category_name',
        // 'is_archived'
    ];

    public function user()
    {
        return $this->belongsTo(users::class, 'userid', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id', 'category_id');
    }
}
