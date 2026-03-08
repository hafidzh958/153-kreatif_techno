@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-gray-500 text-sm font-medium">Total Services</h3>
        <p class="text-2xl font-bold text-gray-900 mt-1">0</p>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-gray-500 text-sm font-medium">Total Portfolio</h3>
        <p class="text-2xl font-bold text-gray-900 mt-1">0</p>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-gray-500 text-sm font-medium">Pesan Baru</h3>
        <p class="text-2xl font-bold text-gray-900 mt-1">0</p>
    </div>
</div>

<div class="mt-8 bg-white rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 mb-4">Selamat datang di Admin Dashboard</h3>
    <p class="text-gray-600">
        Kelola konten website company profile dari menu sidebar: Services, Portfolio, dan lihat pesan dari halaman Contact.
    </p>
</div>
@endsection
