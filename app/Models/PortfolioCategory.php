<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',

    ];

    public function portfolio()
    {
        return $this->hasMany(Portfolio::class, 'category_id', 'id');
    }
}
