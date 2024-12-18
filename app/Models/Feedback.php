<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedback';

    protected $fillable = [
        'full_name',
        'message',
        'user_id'
    ];

    public function getUpdatedAtColumn()
    {
        return null;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
