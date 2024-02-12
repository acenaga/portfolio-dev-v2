<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkResponsibility extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_experience_id',
        'description',
    ];

    public function experience()
    {
        return $this->belongsTo(WorkExperience::class);
    }
}
