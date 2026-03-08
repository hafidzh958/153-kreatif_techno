<?php

namespace App\Http\Controllers;

use App\Models\Service; // Penting: Pastikan Model Service dipanggil di sini
use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * Menampilkan daftar semua layanan.
     */
    public function index(): View
    {
        // Mengambil semua data dari tabel 'services' melalui Model Service
        $services = Service::all();

        // Mengirim data ke view 'user.services'
        // Pastikan file view kamu ada di resources/views/user/services.blade.php
        return view('user.services', compact('services'));
    }
}