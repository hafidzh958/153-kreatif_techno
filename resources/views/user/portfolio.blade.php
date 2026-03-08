@extends('layouts.app')

@section('title', 'Portofolio Kami - 153 Kreatif')

@push('styles')
<style>

    /* Filter Button Active State */
    .filter-btn.active {
        background-color: #ff6a00;
        color: white;
        border-color: #ff6a00;
    }

    /* Custom Portfolio Grid Layout */
    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
        position: relative;
    }

    .portfolio-item {
        position: relative;
        overflow: hidden;
        border-radius: 16px;
        background-color: #f9fafb;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        transition: opacity 0.4s ease, transform 0.4s ease;
    }

    .portfolio-item img {
        width: 100%;
        aspect-ratio: 16 / 9;
        object-fit: cover;
        transition: transform 0.5s ease;
        display: block;
    }

    .portfolio-item:hover img {
        transform: scale(1.05);
    }

    .portfolio-overlay {
        position: absolute;
        inset: 0;
        background-color: rgba(255, 106, 0, 0.9);
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 1.5rem;
    }

    .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
    }

    .portfolio-text-content {
        transform: translateY(20px);
        transition: transform 0.5s ease;
    }

    .portfolio-item:hover .portfolio-text-content {
        transform: translateY(0);
    }
</style>
@endpush

@section('content')

{{-- 1. Header Section --}}
<section class="pt-32 pb-24 md:pt-40 md:pb-32 bg-gradient-to-br from-[#fff3ec] to-[#ffe6d6] overflow-hidden relative shadow-inner">
    {{-- Decorative background element --}}
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-[#ff6a00] to-transparent"></div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
        <h1 class="animate-fade-in-up text-5xl md:text-6xl lg:text-7xl font-extrabold text-gray-900 tracking-tight mb-6 drop-shadow-sm" style="font-family: 'Montserrat', sans-serif;">
            Portofolio Kami
        </h1>
        <p class="animate-fade-in-up delay-1 text-xl sm:text-2xl text-gray-700 font-medium max-w-2xl mx-auto leading-relaxed" style="font-family: 'Inter', sans-serif;">
            Beberapa dokumentasi proyek event, pameran, dan aktivasi brand yang telah kami tangani.
        </p>
    </div>
</section>

{{-- 2. Portfolio Grid & Filters --}}
<section class="py-24 lg:py-32 bg-white overflow-hidden min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Filter Buttons --}}
        <div class="flex flex-wrap justify-center gap-3 sm:gap-4 mb-16 scroll-fade" id="portfolio-filters">
            <button class="filter-btn active px-6 py-2.5 rounded-full border-2 border-gray-200 text-gray-700 font-semibold hover:border-[#ff6a00] hover:text-[#ff6a00] transition-colors focus:outline-none" data-filter="all" style="font-family: 'Montserrat', sans-serif;">
                All
            </button>
            <button class="filter-btn px-6 py-2.5 rounded-full border-2 border-gray-200 text-gray-700 font-semibold hover:border-[#ff6a00] hover:text-[#ff6a00] transition-colors focus:outline-none" data-filter="automotive" style="font-family: 'Montserrat', sans-serif;">
                Automotive Exhibition
            </button>
            <button class="filter-btn px-6 py-2.5 rounded-full border-2 border-gray-200 text-gray-700 font-semibold hover:border-[#ff6a00] hover:text-[#ff6a00] transition-colors focus:outline-none" data-filter="creative" style="font-family: 'Montserrat', sans-serif;">
                Creative Production
            </button>
            <button class="filter-btn px-6 py-2.5 rounded-full border-2 border-gray-200 text-gray-700 font-semibold hover:border-[#ff6a00] hover:text-[#ff6a00] transition-colors focus:outline-none" data-filter="community" style="font-family: 'Montserrat', sans-serif;">
                Community Events
            </button>
        </div>

        {{-- Grid Structure Rewrite --}}
        <div class="portfolio-grid" id="portfolio-grid">
            
            <div class="portfolio-item scroll-fade" data-category="automotive">
                <img src="https://images.unsplash.com/photo-1605810230434-7631ac76ec81?w=800&q=80" alt="Pameran Otomotif Mall">
                <div class="portfolio-overlay">
                    <div class="portfolio-text-content">
                        <span class="inline-block px-3 py-1 bg-white/20 text-white text-xs font-semibold tracking-wide rounded-full mb-2 uppercase" style="font-family: 'Inter', sans-serif;">Automotive Exhibition</span>
                        <h3 class="text-xl md:text-2xl font-bold text-white drop-shadow-md" style="font-family: 'Montserrat', sans-serif;">Pameran Otomotif Mall</h3>
                    </div>
                </div>
            </div>

            <div class="portfolio-item scroll-fade" data-category="community" style="animation-delay: 0.1s;">
                <img src="https://images.unsplash.com/photo-1552674605-1a3b10b00c50?w=800&q=80" alt="Fun Run Event">
                <div class="portfolio-overlay">
                    <div class="portfolio-text-content">
                        <span class="inline-block px-3 py-1 bg-white/20 text-white text-xs font-semibold tracking-wide rounded-full mb-2 uppercase" style="font-family: 'Inter', sans-serif;">Community Event</span>
                        <h3 class="text-xl md:text-2xl font-bold text-white drop-shadow-md" style="font-family: 'Montserrat', sans-serif;">Fun Run Event</h3>
                    </div>
                </div>
            </div>

            <div class="portfolio-item scroll-fade" data-category="community" style="animation-delay: 0.2s;">
                <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?w=800&q=80" alt="Bazaar UMKM Expo">
                <div class="portfolio-overlay">
                    <div class="portfolio-text-content">
                        <span class="inline-block px-3 py-1 bg-white/20 text-white text-xs font-semibold tracking-wide rounded-full mb-2 uppercase" style="font-family: 'Inter', sans-serif;">Community Event</span>
                        <h3 class="text-xl md:text-2xl font-bold text-white drop-shadow-md" style="font-family: 'Montserrat', sans-serif;">Bazaar UMKM Expo</h3>
                    </div>
                </div>
            </div>

            <div class="portfolio-item scroll-fade" data-category="creative" style="animation-delay: 0.3s;">
                <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=800&q=80" alt="Booth Activation">
                <div class="portfolio-overlay">
                    <div class="portfolio-text-content">
                        <span class="inline-block px-3 py-1 bg-white/20 text-white text-xs font-semibold tracking-wide rounded-full mb-2 uppercase" style="font-family: 'Inter', sans-serif;">Creative Production</span>
                        <h3 class="text-xl md:text-2xl font-bold text-white drop-shadow-md" style="font-family: 'Montserrat', sans-serif;">Booth Activation</h3>
                    </div>
                </div>
            </div>

            <div class="portfolio-item scroll-fade" data-category="automotive" style="animation-delay: 0.4s;">
                <img src="https://images.unsplash.com/photo-1503375816999-f2e1edb73489?w=800&q=80" alt="Automotive Display">
                <div class="portfolio-overlay">
                    <div class="portfolio-text-content">
                        <span class="inline-block px-3 py-1 bg-white/20 text-white text-xs font-semibold tracking-wide rounded-full mb-2 uppercase" style="font-family: 'Inter', sans-serif;">Mall Activation</span>
                        <h3 class="text-xl md:text-2xl font-bold text-white drop-shadow-md" style="font-family: 'Montserrat', sans-serif;">Automotive Display</h3>
                    </div>
                </div>
            </div>

            <div class="portfolio-item scroll-fade" data-category="community" style="animation-delay: 0.5s;">
                <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=800&q=80" alt="Festival Komunitas">
                <div class="portfolio-overlay">
                    <div class="portfolio-text-content">
                        <span class="inline-block px-3 py-1 bg-white/20 text-white text-xs font-semibold tracking-wide rounded-full mb-2 uppercase" style="font-family: 'Inter', sans-serif;">Public Event</span>
                        <h3 class="text-xl md:text-2xl font-bold text-white drop-shadow-md" style="font-family: 'Montserrat', sans-serif;">Festival Komunitas</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 3. Call To Action Section --}}
<section class="py-24 lg:py-32 bg-gradient-to-r from-[#ff6a00] to-[#ff8c3a] shadow-inner relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white to-transparent"></div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center scroll-fade">
        <h2 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white mb-12 leading-tight drop-shadow-sm" style="font-family: 'Montserrat', sans-serif;">
            Let's Create Your Next Event With 153 Kreatif
        </h2>
        <a href="{{ route('contact') }}" class="inline-block px-10 py-4 bg-white text-[#ff6a00] font-bold rounded-full hover:bg-gray-50 transition-all duration-300 shadow-2xl hover:shadow-white/20 hover:-translate-y-2 transform text-xl" style="font-family: 'Montserrat', sans-serif;">
            Hubungi Kami
        </a>
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');

                const filterValue = btn.getAttribute('data-filter');

                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endpush
