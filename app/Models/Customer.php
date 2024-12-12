<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'document_type',
        'document_number',
        'email'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}