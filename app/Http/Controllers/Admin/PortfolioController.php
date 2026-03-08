<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $portfolios = Portfolio::latest()->paginate(10);

        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $data = [
            'title' => $validated['title'],
            'category' => $validated['category'] ?? '',
            'description' => $validated['description'] ?? '',
        ];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('portfolios', 'public');
            $data['image_path'] = $path;
        }

        Portfolio::create($data);

        return redirect()
            ->route('admin.portfolio.index')
            ->with('success', 'Portfolio berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio): View
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $data = [
            'title' => $validated['title'],
            'category' => $validated['category'] ?? '',
            'description' => $validated['description'] ?? '',
        ];

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($portfolio->image_path) {
                Storage::disk('public')->delete($portfolio->image_path);
            }

            $path = $request->file('image')->store('portfolios', 'public');
            $data['image_path'] = $path;
        }

        $portfolio->update($data);

        return redirect()
            ->route('admin.portfolio.index')
            ->with('success', 'Portfolio berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image_path) {
            Storage::disk('public')->delete($portfolio->image_path);
        }

        $portfolio->delete();

        return redirect()
            ->route('admin.portfolio.index')
            ->with('success', 'Portfolio berhasil dihapus.');
    }
}
