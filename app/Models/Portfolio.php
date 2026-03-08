<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    // Tambahkan ini agar bisa menerima input data
    protected $fillable = ['title', 'category', 'description', 'image_path'];
}