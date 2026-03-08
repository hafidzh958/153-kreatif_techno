@extends('layouts.admin')

@section('title', 'Edit Service')
@section('page-title', 'Edit Service')

@section('content')
<div class="max-w-2xl">
    <form action="{{ route('admin.services.update', $service) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
            <input type="text" name="title" id="title" value="{{ old('title', $service->title ?? '') }}" required
                class="w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('title')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
            <textarea name="description" id="description" rows="4"
                class="w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description', $service->description ?? '') }}</textarea>
            @error('description')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex gap-2">
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Update</button>
            <a href="{{ route('admin.services.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">Batal</a>
        </div>
    </form>
</div>
@endsection
