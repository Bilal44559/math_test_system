<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mcq extends Model
{
    use HasFactory;

    protected $fillable = ['question','status'];

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
