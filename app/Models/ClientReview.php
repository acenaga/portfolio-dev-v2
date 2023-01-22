<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'company',
        'url',
        'review',
        'image',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getGetimageAttribute($key)
    {
        if ($this->image) {
            return url("storage/$this->image");
        }
    }
}
