@extends('layouts.admin')

@section('title', 'Manage Portfolio')
@section('page-title', 'Portfolio')

@section('content')
<div class="mb-4 sm:mb-6">
    <a href="{{ route('admin.portfolio.create') }}" class="inline-flex items-center px-4 py-2.5 bg-[#f97316] text-white text-sm font-medium rounded-lg hover:bg-orange-600 transition-colors">
        Tambah Portfolio
    </a>
</div>

<div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
    <table class="min-w-[600px] w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase hidden sm:table-cell">Dibuat</th>
                <th class="px-4 sm:px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($portfolios as $portfolio)
                <tr>
                    <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                        {{ ($portfolios->currentPage() - 1) * $portfolios->perPage() + $loop->iteration }}
                    </td>
                    <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $portfolio->title }}
                    </td>
                    <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                        {{ $portfolio->category }}
                    </td>
                    <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden sm:table-cell">
                        {{ $portfolio->created_at?->format('d M Y') }}
                    </td>
                    <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                        <a href="{{ route('admin.portfolio.edit', $portfolio) }}" class="inline-flex items-center px-3 py-1.5 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-xs">
                            Edit
                        </a>
                        <form action="{{ route('admin.portfolio.destroy', $portfolio) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus portfolio ini?')">
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
                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">Belum ada data. Klik "Tambah Portfolio" untuk menambah.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @if($portfolios instanceof \Illuminate\Pagination\AbstractPaginator)
        <div class="px-4 sm:px-6 py-4 border-t overflow-x-auto">
            {{ $portfolios->links() }}
        </div>
    @endif
    </div>
</div>
@endsection
