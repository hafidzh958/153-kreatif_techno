@extends('admin.layouts.app')

@section('title', 'Tambah Service')
@section('page-title', 'Tambah Service')

@section('content')
<div class="max-w-2xl">
    <form action="{{ route('admin.services.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Layanan</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                class="w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
            <textarea name="description" id="description" rows="4"
                class="w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description') }}</textarea>
            @error('description')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="icon" class="block text-sm font-medium text-gray-700 mb-1">Icon (opsional)</label>
            <input type="text" name="icon" id="icon" value="{{ old('icon') }}"
                class="w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                placeholder="cth: bi bi-calendar-event">
            @error('icon')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex gap-2">
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Simpan</button>
            <a href="{{ route('admin.services.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">Batal</a>
        </div>
    </form>
</div>
@endsection
