<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use Illuminate\Http\Request;

use App\Http\Requests\StoreMissionRequest;
use App\Http\Requests\UpdateMissionRequest;
use Illuminate\View\View;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $missions = Mission::latest()->paginate(10);
        return view('admin.missions.index', compact('missions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.missions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMissionRequest $request)
    {
        Mission::create($request->validated());

        return redirect()
            ->route('admin.missions.index')
            ->with('success', 'Mission berhasil ditambahkan.');
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
    public function edit(Mission $mission): View
    {
        return view('admin.missions.edit', compact('mission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMissionRequest $request, Mission $mission)
    {
        $mission->update($request->validated());

        return redirect()
            ->route('admin.missions.index')
            ->with('success', 'Mission berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mission $mission)
    {
        $mission->delete();

        return redirect()
            ->route('admin.missions.index')
            ->with('success', 'Mission berhasil dihapus.');
    }
}
