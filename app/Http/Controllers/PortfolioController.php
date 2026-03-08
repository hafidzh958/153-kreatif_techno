<?php

namespace App\Http\Controllers;

use App\Models\Portfolio; // Panggil Model-nya di sini!

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all(); // Ini perintah ambil data dari database
        return view('user.portfolio', compact('portfolios'));
    }
}