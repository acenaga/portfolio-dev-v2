<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'sub_title',
        'description',
        'link',
        'image',
        'caption_image',
        'keywords',
        'category_id'

    ];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }

    public function portfolio_images()
    {
        return $this->hasMany(PortfolioImage::class, 'portfolio_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function keywords_skills()
    {
        return explode(' ', $this->keywords);
    }

    public function getGetImageAttribute($key)
    {
        if ($this->image) {
            return url("storage/$this->image");
        }
    }
}
