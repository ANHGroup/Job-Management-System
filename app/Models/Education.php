<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'educations';
    public function applicant_profiles()
    {
        return $this->belongsTo(ApplicantProfile::class, 'applicant_id', 'id');
    }
}
