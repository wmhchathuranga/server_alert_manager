<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'project_name',
        'domain_name',
        'project_api_key',
        'key_generated_time',
    ];
}
