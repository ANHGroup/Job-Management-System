<?php
namespace App\Models\Jms;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JmsJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'company', 'location', 'salary', 'created_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
