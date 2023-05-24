<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'company_id', 'location', 'salary', 'requirements'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
