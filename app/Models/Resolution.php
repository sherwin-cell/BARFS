<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resolution extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',     // Pending, Approved, Rejected
        'is_public',  // optional if you want to mark public/private
    ];

    // Relationship: Resolution belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: Resolution can have many feedbacks
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }


}
