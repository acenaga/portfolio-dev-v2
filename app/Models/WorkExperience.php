<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'description',
        'company_name',
        'url',
        'start_date',
        'end_date',
    ];

    public function responsibilities()
    {
        return $this->hasMany(WorkResponsibility::class, 'work_experience_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
