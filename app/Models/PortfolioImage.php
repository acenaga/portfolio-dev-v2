<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'caption_image',
        'portfolio_id',
    ];

    public function portfolio()
    {
        return $this->hasMany(PortfolioImage::class, 'portfolio_id', 'id');
    }

    public function getGetImageAttribute($key)
    {
        if ($this->image) {
            return url("storage/$this->image");
        }
    }
}
