@extends('layouts.admin')

@section('title', 'Manage Services')
@section('page-title', 'Services')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.services.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
        Tambah Service
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Deskripsi</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            {{-- Data services dari controller --}}
            <tr>
                <td colspan="4" class="px-6 py-4 text-center text-gray-500">Belum ada data. Klik "Tambah Service" untuk menambah.</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
