<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packegs';

    // Allow mass assignment for these fields
    protected $fillable = [
        'name',
        'daily_ear_per',
        'days',
    ];
}
