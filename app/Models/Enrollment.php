<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'age_years',
        'age_months',
        'gender',
        'grade',
        'guardian_name',
        'email',
        'phone',
        'postal_code',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
