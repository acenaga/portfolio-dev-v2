<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalSkill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'percent',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
