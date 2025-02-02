<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class userProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'userImage',
        'gender',
        'address',
        'phoneNumber',
        'dateOfBirth',
        'userPrefferedTheme'

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
