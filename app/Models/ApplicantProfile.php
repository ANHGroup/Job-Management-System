<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantProfile extends Model
{
    use HasFactory;
    protected $table = 'applicant_profiles';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
