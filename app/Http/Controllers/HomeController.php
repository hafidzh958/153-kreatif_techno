<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimonial; // Jangan lupa panggil modelnya
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        // Mengambil semua data dari database
        $portfolios = Portfolio::all();
        $services = Service::all();
        $testimonials = Testimonial::all();

        // Mengirim data ke view 'user.home'
        return view('user.home', compact('portfolios', 'services', 'testimonials'));
    }
}