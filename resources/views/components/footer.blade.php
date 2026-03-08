<footer class="bg-[#0f0f0f] text-gray-400 py-12 md:py-16 mt-auto border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-sm font-medium" style="font-family: 'Inter', sans-serif;">&copy; {{ date('Y') }} <span class="text-white">{{ config('app.name', '153 Kreatif') }}</span>. All rights reserved.</p>
            <ul class="flex flex-wrap justify-center gap-8 text-sm font-medium" style="font-family: 'Inter', sans-serif;">
                <li><a href="{{ route('home') }}" class="hover:text-[#ff6a00] transition-colors duration-300">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-[#ff6a00] transition-colors duration-300">About</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-[#ff6a00] transition-colors duration-300">Services</a></li>
                <li><a href="{{ route('portfolio') }}" class="hover:text-[#ff6a00] transition-colors duration-300">Portofolio</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-[#ff6a00] transition-colors duration-300">Contact</a></li>
            </ul>
        </div>
    </div>
</footer>
