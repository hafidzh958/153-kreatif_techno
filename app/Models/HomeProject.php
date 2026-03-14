<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeProject extends Model
{
    protected $fillable = [
        'image',
        'title',
        'order',
        'is_published',
    ];
}
