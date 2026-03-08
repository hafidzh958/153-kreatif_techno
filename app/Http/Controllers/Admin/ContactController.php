<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Tampilkan daftar pesan contact (saat ini masih statis).
     */
    public function index(): View
    {
        return view('admin.contact.index');
    }
}

