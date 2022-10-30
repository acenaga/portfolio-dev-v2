<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class WorkResponsibility extends Model
{
    use HasFactory;


    public function experience()
    {
        return $this->belongsTo(WorkExperience::class);
    }
}
