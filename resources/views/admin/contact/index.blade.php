@extends('admin.layouts.app')

@section('title', 'Contact Messages')
@section('page-title', 'Pesan Contact')

@section('content')
<div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
    <table class="min-w-[500px] w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pesan</th>
                <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            {{-- Data pesan contact dari controller --}}
            <tr>
                <td colspan="5" class="px-4 sm:px-6 py-8 text-sm text-center text-gray-500">Belum ada pesan.</td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
@endsection
