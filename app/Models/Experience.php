<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    public function applicant_profiles()
    {
        return $this->belongsTo(ApplicantProfile::class, 'applicant_id', 'id');
    }
}
