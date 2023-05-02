<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function applied_jobs()
    {
        return $this->hasMany(AppliedJob::class,'job_id','id');
    }
}
