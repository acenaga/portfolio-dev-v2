<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

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
}
