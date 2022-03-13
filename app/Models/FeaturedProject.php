<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'category',
        'title',
        'keyword_sentence',
        'description',
        'link',
        'link_text',
        'testimonial',
        'testimonial_author'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
