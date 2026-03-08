<nav class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <a href="{{ route('home') }}" class="logo-text text-gray-900 hover:text-[#ff6a00] transition-colors" style="font-family: 'Montserrat', sans-serif;">
                153 Kreatif
            </a>

            <ul class="hidden md:flex gap-8">
                <li><a href="{{ route('home') }}" class="relative text-sm font-semibold {{ request()->routeIs('home') ? 'text-[#ff6a00]' : 'text-gray-600 hover:text-[#ff6a00]' }} transition-colors after:absolute after:left-0 after:-bottom-1.5 after:h-[2px] after:bg-[#ff6a00] after:transition-all after:duration-300 {{ request()->routeIs('home') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}" style="font-family: 'Inter', sans-serif;">Home</a></li>
                <li><a href="{{ route('about') }}" class="relative text-sm font-semibold {{ request()->routeIs('about') ? 'text-[#ff6a00]' : 'text-gray-600 hover:text-[#ff6a00]' }} transition-colors after:absolute after:left-0 after:-bottom-1.5 after:h-[2px] after:bg-[#ff6a00] after:transition-all after:duration-300 {{ request()->routeIs('about') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}" style="font-family: 'Inter', sans-serif;">About</a></li>
                <li><a href="{{ route('services') }}" class="relative text-sm font-semibold {{ request()->routeIs('services') ? 'text-[#ff6a00]' : 'text-gray-600 hover:text-[#ff6a00]' }} transition-colors after:absolute after:left-0 after:-bottom-1.5 after:h-[2px] after:bg-[#ff6a00] after:transition-all after:duration-300 {{ request()->routeIs('services') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}" style="font-family: 'Inter', sans-serif;">Services</a></li>
                <li><a href="{{ route('portfolio') }}" class="relative text-sm font-semibold {{ request()->routeIs('portfolio') ? 'text-[#ff6a00]' : 'text-gray-600 hover:text-[#ff6a00]' }} transition-colors after:absolute after:left-0 after:-bottom-1.5 after:h-[2px] after:bg-[#ff6a00] after:transition-all after:duration-300 {{ request()->routeIs('portfolio') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}" style="font-family: 'Inter', sans-serif;">Portofolio</a></li>
                <li><a href="{{ route('contact') }}" class="relative text-sm font-semibold {{ request()->routeIs('contact') ? 'text-[#ff6a00]' : 'text-gray-600 hover:text-[#ff6a00]' }} transition-colors after:absolute after:left-0 after:-bottom-1.5 after:h-[2px] after:bg-[#ff6a00] after:transition-all after:duration-300 {{ request()->routeIs('contact') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}" style="font-family: 'Inter', sans-serif;">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
