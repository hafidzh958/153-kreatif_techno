{{-- Admin Topbar --}}
<header class="fixed top-0 left-0 right-0 z-40 flex items-center h-14 bg-white border-b border-gray-200 shadow-sm px-4 gap-3" id="admin-topbar">
    {{-- Sidebar Toggle --}}
    <button type="button" id="sidebar-toggle"
        class="flex items-center justify-center w-9 h-9 rounded-lg text-gray-500 hover:bg-gray-100 hover:text-gray-800 transition-colors flex-shrink-0"
        aria-label="Toggle sidebar">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>

    {{-- Title --}}
    <span class="text-sm font-semibold text-gray-700 tracking-wide" style="font-family: 'Inter', sans-serif;">
        Admin Kreatif 153
    </span>

    <div class="flex-1"></div>

    {{-- Preview website link --}}
    <a href="{{ route('home') }}" target="_blank"
        class="hidden sm:inline-flex items-center gap-1.5 text-xs text-gray-500 hover:text-[#f97316] font-medium transition-colors px-3 py-1.5 rounded-lg hover:bg-orange-50">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
        </svg>
        Lihat Website
    </a>
</header>
