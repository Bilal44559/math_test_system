<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'enrollment_id',
        'stripe_payment_id',
        'stripe_payment_method',
        'amount',
        'currency',
        'status',
        'description',
        'receipt_email',
        'stripe_response',
    ];

    protected $casts = [
        'stripe_response' => 'array',
    ];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
