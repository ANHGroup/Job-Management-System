<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantProfile extends Model
{
    use HasFactory;
    protected $table = 'applicant_profiles';
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function educations()
    {
        return $this->hasMany(Education::class, 'applicant_id', 'id');
    }
    public function experiences()
    {
        return $this->hasMany(Experience::class, 'applicant_id', 'id');
    }
    public function applied_jobs()
    {
        return $this->hasMany(AppliedJob::class, 'applicant_id', 'id');
    }
}
