<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    // Fillable fields (match your table columns)
    protected $fillable = [
        'firstname',
        'lastname',
        'address',
    ];
}
