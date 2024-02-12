<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'slug',
        'content',
        'featured_image',
        'excerpt',
        'published',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(PostCategory::class);
    }

    public function image()
    {
        return $this->hasMany(PostImage::class);
    }

    public function getGetimageAttribute($key)
    {
        if ($this->featured_image) {
            return url("storage/$this->featured_image");
        }
    }
}
