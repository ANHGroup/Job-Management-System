<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    use HasFactory;
    public function jobs()
    {
        return $this->belongsTo(Job::class, 'job_id', 'id');
    }
    public function applicant_profiles()
    {
        return $this->belongsTo(ApplicantProfile::class, 'applicant_id', 'id');
    }

}
