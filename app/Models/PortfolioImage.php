<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    use HasFactory;

    public function portfolio()
    {
        return $this->hasMany(PortfolioImage::class, 'portfolio_id', 'id');
    }
}
