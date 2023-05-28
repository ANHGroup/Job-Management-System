<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobAdding extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'company_id', 'location', 'salary', 'requirements'];
    public function applicants()
    {
        return $this->belongsToMany(User::class, 'job_applications')->withTimestamps();
    }
}
