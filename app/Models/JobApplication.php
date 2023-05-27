<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;
    protected $fillable = [
       'job_id',
       'user_id',
       'company_id',
       'cover_letter',
       'resume',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
