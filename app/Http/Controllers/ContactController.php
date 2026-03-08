<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Tampilkan halaman contact di sisi user.
     */
    public function index(): View
    {
        return view('user.contact');
    }
}
