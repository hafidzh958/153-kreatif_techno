@extends('layouts.app')

@section('title', 'Home - 153 Creative')

@push('styles')
<style>
    .hover-lift {
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .hover-lift:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px -8px rgba(0,0,0,0.15);
    }
    .gallery-item {
        overflow: hidden;
        border-radius: 0.5rem;
    }
    .gallery-item img {
        transition: transform 0.4s ease;
    }
    .gallery-item:hover img {
        transform: scale(1.06);
    }
    .gallery-item .overlay {
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .gallery-item:hover .overlay {
        opacity: 1;
    }
</style>
@endpush

@section('content')
{{-- 1. Hero Section --}}
<section class="relative min-h-[85vh] flex items-center justify-center bg-gray-900 overflow-hidden">
    <img
        src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=1920&q=80"
        alt="Exhibition and Event"
        class="absolute inset-0 w-full h-full object-cover"
    />
    <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(255,106,0,0.85), rgba(255,140,58,0.85));"></div>
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h1 class="animate-fade-in-up text-5xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight mb-4 drop-shadow-md" style="font-family: 'Montserrat', sans-serif;">
            153 Kreatif
        </h1>
        <p class="animate-fade-in-up delay-1 text-2xl sm:text-3xl font-bold mb-4 drop-shadow-sm" style="font-family: 'Inter', sans-serif;">
            Integrated Event Solutions & Creative Production
        </p>
        <p class="animate-fade-in-up delay-2 text-white/90 text-lg sm:text-xl max-w-3xl mx-auto mb-10 leading-relaxed font-medium" style="font-family: 'Inter', sans-serif;">
            Solusi lengkap untuk event, exhibition, dan produksi kreatif yang memadukan strategi dengan eksekusi.
        </p>
        <a href="{{ route('portfolio') }}" class="animate-fade-in-up delay-3 inline-block px-10 py-4 bg-white text-[#ff6a00] font-bold rounded-full hover:bg-gray-50 hover:shadow-2xl transition-all hover:-translate-y-1 duration-300 text-lg shadow-lg" style="font-family: 'Montserrat', sans-serif;">
            View Portfolio
        </a>
    </div>
</section>

{{-- 2. About Preview Section --}}
<section class="py-24 lg:py-32 bg-[#fff3ec]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6" style="font-family: 'Montserrat', sans-serif;">Tentang Kami</h2>
                <div class="w-20 h-1 bg-[#ff6a00] mb-8"></div>
                <p class="text-gray-600 leading-relaxed text-lg" style="font-family: 'Inter', sans-serif;">
                    <strong class="text-gray-900">153 Kreatif</strong> adalah perusahaan manajemen acara dan produksi kreatif yang menyediakan solusi pemasaran terpadu melalui event, exhibition, dan produksi visual. Kami membantu brand menghubungkan audiens dengan pengalaman yang memorable dan terukur.
                </p>
            </div>
            <div class="relative rounded-lg overflow-hidden shadow-2xl aspect-[4/3] max-h-[450px] group">
                <img
                    src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=800&q=80"
                    alt="Event production"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
        </div>
    </div>
</section>

{{-- 3. Services Section --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 text-center mb-4" style="font-family: 'Montserrat', sans-serif;">Layanan Kami</h2>
        <div class="w-16 h-1 bg-[#ff6a00] mx-auto mb-6"></div>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-14 text-lg" style="font-family: 'Inter', sans-serif;">Solusi terpadu dari konsep hingga eksekusi</p>
        <div class="grid md:grid-cols-3 gap-8">
            <a href="{{ route('services') }}" class="hover-lift bg-white hover:bg-[#ff6a00] rounded-xl p-8 shadow-sm hover:shadow-2xl border border-gray-100 hover:border-[#ff6a00] block group transition-all duration-300">
                <div class="w-14 h-14 rounded-lg bg-gray-900 group-hover:bg-white transition-colors duration-300 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white group-hover:text-[#ff6a00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-white transition-colors duration-300" style="font-family: 'Montserrat', sans-serif;">Automotive Exhibition & Mall Activation</h3>
                <p class="text-gray-600 group-hover:text-white/90 leading-relaxed transition-colors duration-300" style="font-family: 'Inter', sans-serif;">Aktivasi merek di mall dan pameran otomotif dengan konsep kreatif dan eksekusi profesional.</p>
            </a>
            <a href="{{ route('services') }}" class="hover-lift bg-white hover:bg-[#ff6a00] rounded-xl p-8 shadow-sm hover:shadow-2xl border border-gray-100 hover:border-[#ff6a00] block group transition-all duration-300">
                <div class="w-14 h-14 rounded-lg bg-gray-900 group-hover:bg-white transition-colors duration-300 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white group-hover:text-[#ff6a00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-white transition-colors duration-300" style="font-family: 'Montserrat', sans-serif;">Creative Production</h3>
                <p class="text-gray-600 group-hover:text-white/90 leading-relaxed transition-colors duration-300" style="font-family: 'Inter', sans-serif;">Produksi konten visual, instalasi, dan pengalaman interaktif untuk kampanye dan event.</p>
            </a>
            <a href="{{ route('services') }}" class="hover-lift bg-white hover:bg-[#ff6a00] rounded-xl p-8 shadow-sm hover:shadow-2xl border border-gray-100 hover:border-[#ff6a00] block group transition-all duration-300">
                <div class="w-14 h-14 rounded-lg bg-gray-900 group-hover:bg-white transition-colors duration-300 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white group-hover:text-[#ff6a00]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-white transition-colors duration-300" style="font-family: 'Montserrat', sans-serif;">Community & Public Events</h3>
                <p class="text-gray-600 group-hover:text-white/90 leading-relaxed transition-colors duration-300" style="font-family: 'Inter', sans-serif;">Event komunitas dan publik yang engaging, dari festival hingga corporate gathering.</p>
            </a>
        </div>
    </div>
</section>

{{-- 4. Portfolio Preview Section --}}
<section class="py-24 lg:py-32 bg-[#f9fafb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-12">
            <div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900" style="font-family: 'Montserrat', sans-serif;">Featured Projects</h2>
                <div class="w-16 h-1 bg-[#ff6a00] mt-4 mb-4"></div>
                <p class="text-gray-600 text-lg" style="font-family: 'Inter', sans-serif;">Beberapa karya terbaru kami</p>
            </div>
            <a href="{{ route('portfolio') }}" class="text-gray-900 font-semibold hover:text-[#ff6a00] transition-colors inline-flex items-center gap-1 group" style="font-family: 'Montserrat', sans-serif;">
                Lihat Semua
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['id' => 10, 'title' => 'Automotive Expo'],
                ['id' => 12, 'title' => 'Brand Activation'],
                ['id' => 13, 'title' => 'Corporate Gathering'],
                ['id' => 14, 'title' => 'Music Festival'],
                ['id' => 15, 'title' => 'Product Launch'],
                ['id' => 16, 'title' => 'Public Exhibition']
            ] as $project)
            <a href="{{ route('portfolio') }}" class="gallery-item block relative aspect-[4/3] rounded-xl group shadow-sm hover:shadow-xl transition-shadow duration-300">
                <img
                    src="https://picsum.photos/id/{{ $project['id'] }}/800/600"
                    alt="{{ $project['title'] }}"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                />
                <div class="overlay absolute inset-0 bg-gradient-to-t from-[#ff6a00]/95 via-[#ff6a00]/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <h3 class="text-xl font-bold text-white mb-1 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300" style="font-family: 'Montserrat', sans-serif;">{{ $project['title'] }}</h3>
                    <span class="text-white/90 font-medium transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300 delay-75" style="font-family: 'Inter', sans-serif;">View Project &rarr;</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- 5. Contact CTA Section --}}
<section class="py-24 lg:py-32 bg-[#0f0f0f] relative overflow-hidden">
    <div class="absolute inset-0 bg-[#ff6a00]/5"></div>
    <div class="relative z-10 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight" style="font-family: 'Montserrat', sans-serif;">Let's Create Your Next Event</h2>
        <p class="text-white/80 mb-10 text-lg sm:text-xl font-medium" style="font-family: 'Inter', sans-serif;">Siap berkolaborasi? Hubungi kami untuk diskusi project Anda.</p>
        <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-[#ff6a00] text-white font-bold rounded-full hover:bg-[#e65c00] transition-colors shadow-lg hover:shadow-xl hover:-translate-y-1 transform duration-300 text-lg" style="font-family: 'Montserrat', sans-serif;">
            Hubungi Kami
        </a>
    </div>
</section>
@endsection
