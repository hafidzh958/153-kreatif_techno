@extends('layouts.app')

@section('title', 'Hubungi Kami - 153 Kreatif')

@push('styles')
<style>

    /* Contact Cards */
    .contact-card {
        border-radius: 16px;
        background-color: #ffffff;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
    
    .contact-icon-bg {
        background-color: #fff3ec;
        color: #ff6a00;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .contact-card:hover .contact-icon-bg {
        background-color: #ff6a00;
        color: #ffffff;
    }

    /* Floating blobs for Header */
    .blob {
        position: absolute;
        filter: blur(80px);
        z-index: 0;
        opacity: 0.4;
    }
    .blob-1 {
        background-color: #ff8c3a;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        top: -100px;
        right: -50px;
    }
    .blob-2 {
        background-color: #ff6a00;
        width: 250px;
        height: 250px;
        border-radius: 50%;
        bottom: -50px;
        left: -50px;
    }
</style>
@endpush

@section('content')

{{-- 1. Contact Header Section --}}
<section class="pt-32 pb-24 md:pt-40 md:pb-32 bg-gradient-to-br from-[#fff3ec] to-[#ffe6d6] overflow-hidden relative shadow-inner">
    {{-- Decorative Background Elements --}}
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
        <h1 class="animate-fade-in-up text-5xl md:text-6xl lg:text-7xl font-extrabold text-gray-900 tracking-tight mb-6 drop-shadow-sm" style="font-family: 'Montserrat', sans-serif;">
            Hubungi Kami
        </h1>
        <p class="animate-fade-in-up delay-1 text-xl sm:text-2xl text-gray-700 font-medium max-w-2xl mx-auto leading-relaxed" style="font-family: 'Inter', sans-serif;">
            Kami siap membantu mewujudkan event dan aktivasi brand Anda. Silakan hubungi tim kami untuk berdiskusi lebih lanjut.
        </p>
    </div>
</section>

{{-- 2. Contact Information Section --}}
<section class="py-24 lg:py-32 bg-[#f9fafb] relative -mt-10 lg:-mt-16 z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            {{-- Card 1: Alamat --}}
            <div class="contact-card p-8 text-center scroll-fade">
                <div class="contact-icon-bg w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3" style="font-family: 'Montserrat', sans-serif;">Alamat</h3>
                <p class="text-gray-600 leading-relaxed" style="font-family: 'Inter', sans-serif;">
                    Jl. Contoh Alamat No.123<br>
                    Jakarta, Indonesia
                </p>
            </div>

            {{-- Card 2: Email --}}
            <div class="contact-card p-8 text-center scroll-fade delay-1">
                <div class="contact-icon-bg w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3" style="font-family: 'Montserrat', sans-serif;">Email</h3>
                <p class="text-gray-600 leading-relaxed" style="font-family: 'Inter', sans-serif;">
                    <a href="mailto:hello@153kreatif.com" class="hover:text-[#ff6a00] transition-colors">hello@153kreatif.com</a>
                </p>
            </div>

            {{-- Card 3: Telepon --}}
            <div class="contact-card p-8 text-center scroll-fade delay-2">
                <div class="contact-icon-bg w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3" style="font-family: 'Montserrat', sans-serif;">Telepon / WhatsApp</h3>
                <p class="text-gray-600 leading-relaxed" style="font-family: 'Inter', sans-serif;">
                    +62 812 3456 7890
                </p>
            </div>

        </div>
    </div>
</section>

{{-- 3. Contact Form Section --}}
<section class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            {{-- Form Intro Content --}}
            <div class="scroll-fade">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6 leading-tight" style="font-family: 'Montserrat', sans-serif;">
                    Punya ide brilian? <br>
                    <span class="text-[#ff6a00]">Mari bicarakan.</span>
                </h2>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed" style="font-family: 'Inter', sans-serif;">
                    Kirimkan detail kebutuhan acara atau kampanye Anda. Tim ahli dari 153 Kreatif siap berdiskusi untuk mencapai objektif brand Anda.
                </p>
                
                {{-- Decorative image or graphic --}}
                <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100 mt-10">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=800&q=80" alt="Meeting 153 Kreatif" class="w-full h-64 object-cover">
                </div>
            </div>

            {{-- WhatsApp Contact Card (Replaced Form) --}}
            <div class="bg-white p-8 lg:p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.08)] border border-gray-100 scroll-fade delay-1 text-center h-full flex flex-col justify-center min-h-[400px]">
                <div class="w-20 h-20 bg-[#fff3ec] rounded-full flex items-center justify-center mx-auto mb-6 text-[#ff6a00]">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                
                <h3 class="text-3xl font-bold text-gray-900 mb-4" style="font-family: 'Montserrat', sans-serif;">Hubungi Kami</h3>
                <p class="text-lg text-gray-600 mb-10 leading-relaxed font-medium" style="font-family: 'Inter', sans-serif;">
                    Diskusikan kebutuhan event, pameran, atau aktivasi brand Anda langsung dengan tim kami.
                </p>
                
                <div class="flex flex-col gap-4">
                    <a href="https://wa.me/6285711376797" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-full bg-[#25D366] text-white py-4 px-8 rounded-full font-bold text-lg hover:bg-[#20ba56] transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1" style="font-family: 'Montserrat', sans-serif;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="mr-3" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg>
                        Chat via WhatsApp
                    </a>
                    <a href="mailto:hello@153kreatif.com" class="flex items-center justify-center w-full bg-white text-gray-700 py-4 px-8 rounded-full font-bold text-lg border border-gray-200 hover:bg-gray-50 hover:border-gray-300 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-1" style="font-family: 'Montserrat', sans-serif;">
                        <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Kirim Email
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 4. Google Map Section --}}
<section class="pb-24 lg:pb-32 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 scroll-fade">
            <h2 class="text-3xl font-bold text-gray-900" style="font-family: 'Montserrat', sans-serif;">Lokasi Kami</h2>
            <div class="w-16 h-1 bg-[#ff6a00] mx-auto mt-4 rounded-full"></div>
        </div>
        
        <div class="rounded-3xl overflow-hidden shadow-xl border border-gray-100 bg-gray-50 h-[450px] relative scroll-fade">
            {{-- Embedded Google Maps Iframe --}}
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.24036069902!2d106.7594770425686!3d-6.229746400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                width="100%" 
                height="100%" 
                style="border:0; filter: grayscale(20%) contrast(110%);" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

{{-- 5. Final CTA Section --}}
<section class="py-24 lg:py-32 bg-gradient-to-r from-[#ff6a00] to-[#ff8c3a] shadow-inner relative overflow-hidden">
    {{-- Decorative element --}}
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white to-transparent"></div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 text-center scroll-fade">
        <h2 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white mb-12 leading-tight drop-shadow-sm" style="font-family: 'Montserrat', sans-serif;">
            Siap Membuat Event Anda Lebih Berkesan?
        </h2>
        <a href="#name" class="inline-block px-10 py-4 bg-white text-[#ff6a00] font-bold rounded-full hover:bg-gray-50 transition-all duration-300 shadow-2xl hover:shadow-white/20 hover:-translate-y-2 transform text-xl" style="font-family: 'Montserrat', sans-serif;">
            Diskusikan Proyek Anda
        </a>
    </div>
</section>

@endsection
