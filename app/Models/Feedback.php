<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    // Mass assignable fields
    protected $fillable = [
        'resolution_id',
        'user_id',
        'name',
        'email',
        'message',  // resident's message
        'reply',    // admin or user reply
        'status',
    ];

    // Default attribute values
    protected $attributes = [
        'status' => 'pending',
    ];

    // Status constants
    const STATUS_PENDING = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';
    const STATUS_REPLIED = 'replied';

    // Feedback belongs to a Resolution
    public function resolution()
    {
        return $this->belongsTo(Resolution::class);
    }

    // Feedback belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Accessor to capitalize status when displayed
    public function getStatusAttribute($value)
    {
        return ucfirst($value);
    }
}
