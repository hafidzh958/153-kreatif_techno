@extends('layouts.app')

@section('title', 'Layanan Kami - 153 Kreatif')

@push('styles')
<style>

    .hover-card-lift {
        transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-card-lift:hover {
        transform: translateY(-8px);
        border-color: #ff6a00;
        box-shadow: 0 15px 30px -5px rgba(255,106,0,0.15);
    }

    /* Flex Zigzag Layout */
    .service-row {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 60px;
    }
    @media (min-width: 1024px) {
        .service-row {
            flex-direction: row;
        }
        .service-row.reverse {
            flex-direction: row-reverse;
        }
    }
    .service-row > .service-img,
    .service-row > .service-text {
        flex: 1;
        width: 100%;
    }
</style>
@endpush

@section('content')

{{-- 1. Header Section --}}
<section class="pt-32 pb-24 md:pt-40 md:pb-32 bg-gradient-to-br from-[#ff6a00] to-[#ff8c3a] overflow-hidden relative shadow-inner">
    {{-- Decorative background element --}}
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white to-transparent"></div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
        <h1 class="animate-fade-in-up text-5xl md:text-6xl lg:text-7xl font-extrabold text-white tracking-tight mb-6 drop-shadow-sm" style="font-family: 'Montserrat', sans-serif;">
            Layanan Kami
        </h1>
        <p class="animate-fade-in-up delay-1 text-xl sm:text-2xl text-white/90 font-medium max-w-2xl mx-auto leading-relaxed" style="font-family: 'Inter', sans-serif;">
            Integrated Event Solutions & Creative Production
        </p>
    </div>
</section>

{{-- 2. Services Introduction --}}
<section class="py-16 bg-white border-b border-gray-100">
    <div class="max-w-4xl mx-auto px-4 text-center scroll-fade">
        <p class="text-xl md:text-2xl text-gray-700 leading-relaxed font-medium" style="font-family: 'Inter', sans-serif;">
            <strong class="text-[#ff6a00]">153 Kreatif</strong> menyediakan solusi event terintegrasi yang mencakup manajemen acara, produksi kreatif, serta penyelenggaraan event komunitas untuk memperkuat kehadiran brand Anda.
        </p>
    </div>
</section>

{{-- 3. Main Services (Zig-Zag) --}}

{{-- Service 1: Automotive (Image Left - Text Right) --}}
<section class="py-24 lg:py-32 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 scroll-fade">
        <div class="service-row">
            {{-- Image --}}
            <div class="service-img relative rounded-3xl overflow-hidden shadow-2xl aspect-[4/3] lg:aspect-square group">
                <img
                    src="https://images.unsplash.com/photo-1605810230434-7631ac76ec81?w=800&q=80"
                    alt="Automotive Exhibition"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                />
            </div>
            {{-- Text --}}
            <div class="service-text">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#fff3ec] rounded-2xl mb-6 text-[#ff6a00]">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6" style="font-family: 'Montserrat', sans-serif;">Automotive Exhibition & Mall Activation</h2>
                <div class="w-20 h-1.5 bg-[#ff6a00] mb-6 rounded-full"></div>
                <p class="text-gray-700 leading-relaxed text-lg mb-6" style="font-family: 'Inter', sans-serif;">
                    Kami mengelola pameran otomotif untuk dealer resmi di pusat perbelanjaan dengan strategi penempatan lokasi yang tepat serta pengelolaan display kendaraan yang menarik perhatian pengunjung.
                </p>
                <ul class="space-y-4 text-gray-700 text-lg" style="font-family: 'Inter', sans-serif;">
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 mt-1 flex-shrink-0 bg-[#ff6a00] rounded-full flex items-center justify-center text-white shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>Manajemen perizinan dan koordinasi lokasi strategis</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 mt-1 flex-shrink-0 bg-[#ff6a00] rounded-full flex items-center justify-center text-white shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>Penataan display kendaraan yang menarik perhatian pengunjung</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 mt-1 flex-shrink-0 bg-[#ff6a00] rounded-full flex items-center justify-center text-white shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>Aktivasi brand di area pameran</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Service 2: Creative Production (Text Left - Image Right using .reverse) --}}
<section class="py-24 lg:py-32 bg-[#fff3ec] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 scroll-fade">
        <div class="service-row reverse">
            {{-- Image --}}
            <div class="service-img relative rounded-3xl overflow-hidden shadow-2xl aspect-[4/3] lg:aspect-square group">
                <img
                    src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=800&q=80"
                    alt="Creative Stage Production"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                />
            </div>
            {{-- Text --}}
            <div class="service-text">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-2xl mb-6 text-[#ff6a00] shadow-sm">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"/></svg>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6" style="font-family: 'Montserrat', sans-serif;">Creative Production (In-House)</h2>
                <div class="w-20 h-1.5 bg-[#ff6a00] mb-6 rounded-full"></div>
                <p class="text-gray-800 leading-relaxed text-lg mb-6" style="font-family: 'Inter', sans-serif;">
                    Kami memiliki unit produksi internal yang memungkinkan kami memastikan kualitas material event dengan standar tinggi serta ketepatan waktu pengerjaan.
                </p>
                <ul class="space-y-4 text-gray-800 text-lg font-medium" style="font-family: 'Inter', sans-serif;">
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 mt-1 flex-shrink-0 bg-white border-2 border-[#ff6a00] rounded-full flex items-center justify-center text-[#ff6a00]">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>Backdrop & Stage Production</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 mt-1 flex-shrink-0 bg-white border-2 border-[#ff6a00] rounded-full flex items-center justify-center text-[#ff6a00]">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>Signage & Neon Box</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 mt-1 flex-shrink-0 bg-white border-2 border-[#ff6a00] rounded-full flex items-center justify-center text-[#ff6a00]">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>Booth Construction</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Service 3: Community (Image Left - Text Right) --}}
<section class="py-24 lg:py-32 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 scroll-fade">
        <div class="service-row">
            {{-- Image --}}
            <div class="service-img relative rounded-3xl overflow-hidden shadow-2xl aspect-[4/3] lg:aspect-square group">
                <img
                    src="https://images.unsplash.com/photo-1511512578047-dfb367046420?w=800&q=80"
                    alt="Community Festival Event"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                />
            </div>
            {{-- Text --}}
            <div class="service-text">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#fff3ec] rounded-2xl mb-6 text-[#ff6a00]">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6" style="font-family: 'Montserrat', sans-serif;">Community & Public Events</h2>
                <div class="w-20 h-1.5 bg-[#ff6a00] mb-6 rounded-full"></div>
                <p class="text-gray-700 leading-relaxed text-lg mb-6" style="font-family: 'Inter', sans-serif;">
                    Kami berpengalaman dalam mengelola acara publik dan komunitas dengan sistem manajemen event yang profesional serta pengelolaan kerumunan yang terorganisir.
                </p>
                <ul class="space-y-4 text-gray-700 text-lg" style="font-family: 'Inter', sans-serif;">
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 mt-1 flex-shrink-0 bg-[#ff6a00] rounded-full flex items-center justify-center text-white shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>Sport Events seperti fun run dan kompetisi olahraga</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 mt-1 flex-shrink-0 bg-[#ff6a00] rounded-full flex items-center justify-center text-white shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>Bazaar & UMKM Expo</span>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 mt-1 flex-shrink-0 bg-[#ff6a00] rounded-full flex items-center justify-center text-white shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span>Festival komunitas</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- 4. Additional Services Grid --}}
<section class="py-24 lg:py-32 bg-gray-50 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 scroll-fade">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6" style="font-family: 'Montserrat', sans-serif;">Layanan Pendukung Lainnya</h2>
            <div class="w-16 h-1.5 bg-[#ff6a00] mx-auto rounded-full"></div>
        </div>

        @php
        $minorServices = [
            'Event Planning',
            'Brand Activation',
            'Booth Construction',
            'Stage Production',
            '3D Event Visualization',
            'Community Event Management'
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($minorServices as $s)
            <div class="hover-card-lift bg-white p-8 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-center text-center">
                <h4 class="text-xl font-bold text-gray-800" style="font-family: 'Montserrat', sans-serif;">{{ $s }}</h4>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 5. Call To Action Section --}}
<section class="py-24 lg:py-32 bg-gradient-to-r from-[#ff6a00] to-[#ff8c3a] shadow-inner relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white to-transparent"></div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center scroll-fade">
        <h2 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white mb-12 leading-tight drop-shadow-sm" style="font-family: 'Montserrat', sans-serif;">
            Let's Create Your Next Event With 153 Kreatif
        </h2>
        <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-white text-[#ff6a00] font-bold rounded-full hover:bg-gray-50 transition-all duration-300 shadow-2xl hover:shadow-white/20 hover:-translate-y-2 transform text-xl" style="font-family: 'Montserrat', sans-serif;">
            Contact Us
        </a>
    </div>
</section>

@endsection
