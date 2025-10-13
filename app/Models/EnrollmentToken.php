<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnrollmentToken extends Model
{
    protected $fillable = [
        'enrollment_id',
        'token',
        'expires_at',
        'used',
    ];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
