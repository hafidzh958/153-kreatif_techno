@extends('admin.layouts.app')

@section('title', 'Manage Services')
@section('page-title', 'Services')

@section('content')
<div class="mb-4 sm:mb-6">
    <a href="{{ route('admin.services.create') }}" class="inline-flex items-center px-4 py-2.5 bg-[#f97316] text-white text-sm font-medium rounded-lg hover:bg-orange-600 transition-colors">
        Tambah Service
    </a>
</div>

<div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
    <table class="min-w-[640px] w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase hidden md:table-cell">Deskripsi</th>
                <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase hidden lg:table-cell">Icon</th>
                <th class="px-4 sm:px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($services as $service)
                <tr>
                    <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                        {{ ($services->currentPage() - 1) * $services->perPage() + $loop->iteration }}
                    </td>
                    <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $service->name }}
                    </td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-700 hidden md:table-cell">
                        {{ \Illuminate\Support\Str::limit($service->description, 80) }}
                    </td>
                    <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden lg:table-cell">
                        {{ $service->icon }}
                    </td>
                    <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                        <a href="{{ route('admin.services.edit', $service) }}" class="inline-flex items-center px-3 py-1.5 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-xs">
                            Edit
                        </a>
                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus service ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-3 py-1.5 bg-red-600 text-white rounded hover:bg-red-700 text-xs">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 sm:px-6 py-8 text-center text-gray-500 text-sm">Belum ada data. Klik "Tambah Service" untuk menambah.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @if($services instanceof \Illuminate\Pagination\AbstractPaginator)
        <div class="px-4 sm:px-6 py-4 border-t overflow-x-auto">
            {{ $services->links() }}
        </div>
    @endif
    </div>
</div>
@endsection
