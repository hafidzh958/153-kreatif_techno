<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    // Menambahkan kolom yang boleh diisi (mass assignable)
    protected $fillable = ['client_name', 'content', 'rating', 'client_image'];
}