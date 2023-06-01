<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telegram extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'bot_api_key',
        'channel_id',
        // Add other column names here
    ];
}
