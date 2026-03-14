<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Process;
use Illuminate\Http\Request;

use App\Http\Requests\StoreProcessRequest;
use App\Http\Requests\UpdateProcessRequest;
use Illuminate\View\View;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $processes = Process::orderBy('step_number', 'asc')->paginate(10);
        return view('admin.processes.index', compact('processes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.processes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProcessRequest $request)
    {
        Process::create($request->validated());

        return redirect()
            ->route('admin.processes.index')
            ->with('success', 'Proses berhasil ditambahkan.');
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
    public function edit(Process $process): View
    {
        return view('admin.processes.edit', compact('process'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProcessRequest $request, Process $process)
    {
        $process->update($request->validated());

        return redirect()
            ->route('admin.processes.index')
            ->with('success', 'Proses berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Process $process)
    {
        $process->delete();

        return redirect()
            ->route('admin.processes.index')
            ->with('success', 'Proses berhasil dihapus.');
    }
}
