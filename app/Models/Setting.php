<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'company_name',
        'hero_title',
        'hero_description',
        'phone',
        'email',
        'instagram',
        'address',
        'logo'
    ];
}
