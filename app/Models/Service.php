<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // Menambahkan kolom yang boleh diisi (mass assignable)
    protected $fillable = ['name', 'description', 'icon'];
}