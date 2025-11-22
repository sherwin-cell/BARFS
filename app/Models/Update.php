<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;

    // Specify which table this model corresponds to (optional if following Laravel plural naming)
    protected $table = 'updates';

    // Mass-assignable fields
    protected $fillable = [
        'title',
        'description',
        'status',
    ];
}
