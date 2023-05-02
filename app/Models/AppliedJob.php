<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    use HasFactory;
    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'job_id', 'id');
    }
    public function applicant_profiles()
    {
        return $this->belongsToMany(ApplicantProfile::class, 'job_id', 'id');
    }

}
