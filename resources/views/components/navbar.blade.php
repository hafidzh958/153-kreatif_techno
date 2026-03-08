<nav class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100 transition-all duration-300" id="main-navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 sm:h-20">
        <a href="{{ route('home') }}" class="logo-text">
    <img src="{{ asset('assets/img/153.png') }}" 
         alt="Logo 153 Kreatif" 
         class="h-16 sm:h-20 md:h-24 w-auto">
</a>
            {{-- Desktop nav --}}
            <ul class="hidden md:flex gap-8">
                <li><a href="{{ route('home') }}" class="relative text-sm font-semibold {{ request()->routeIs('home') ? 'text-[#ff6a00]' : 'text-gray-600 hover:text-[#ff6a00]' }} transition-colors after:absolute after:left-0 after:-bottom-1.5 after:h-[2px] after:bg-[#ff6a00] after:transition-all after:duration-300 {{ request()->routeIs('home') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}" style="font-family: 'Inter', sans-serif;">Home</a></li>
                <li><a href="{{ route('about') }}" class="relative text-sm font-semibold {{ request()->routeIs('about') ? 'text-[#ff6a00]' : 'text-gray-600 hover:text-[#ff6a00]' }} transition-colors after:absolute after:left-0 after:-bottom-1.5 after:h-[2px] after:bg-[#ff6a00] after:transition-all after:duration-300 {{ request()->routeIs('about') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}" style="font-family: 'Inter', sans-serif;">About</a></li>
                <li><a href="{{ route('services') }}" class="relative text-sm font-semibold {{ request()->routeIs('services') ? 'text-[#ff6a00]' : 'text-gray-600 hover:text-[#ff6a00]' }} transition-colors after:absolute after:left-0 after:-bottom-1.5 after:h-[2px] after:bg-[#ff6a00] after:transition-all after:duration-300 {{ request()->routeIs('services') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}" style="font-family: 'Inter', sans-serif;">Services</a></li>
                <li><a href="{{ route('portfolio') }}" class="relative text-sm font-semibold {{ request()->routeIs('portfolio') ? 'text-[#ff6a00]' : 'text-gray-600 hover:text-[#ff6a00]' }} transition-colors after:absolute after:left-0 after:-bottom-1.5 after:h-[2px] after:bg-[#ff6a00] after:transition-all after:duration-300 {{ request()->routeIs('portfolio') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}" style="font-family: 'Inter', sans-serif;">Portofolio</a></li>
                <li><a href="{{ route('contact') }}" class="relative text-sm font-semibold {{ request()->routeIs('contact') ? 'text-[#ff6a00]' : 'text-gray-600 hover:text-[#ff6a00]' }} transition-colors after:absolute after:left-0 after:-bottom-1.5 after:h-[2px] after:bg-[#ff6a00] after:transition-all after:duration-300 {{ request()->routeIs('contact') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}" style="font-family: 'Inter', sans-serif;">Contact</a></li>
            </ul>

            {{-- Mobile menu button --}}
            <button type="button" id="nav-toggle" class="md:hidden p-2 -mr-2 rounded-lg text-gray-600 hover:bg-gray-100 hover:text-[#ff6a00] transition-colors" aria-label="Toggle menu">
                <svg id="nav-icon-menu" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="nav-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Mobile dropdown --}}
        <div id="nav-menu" class="md:hidden hidden overflow-hidden">
            <ul class="py-4 space-y-1 border-t border-gray-100">
                <li><a href="{{ route('home') }}" class="block py-2.5 px-3 text-sm font-semibold {{ request()->routeIs('home') ? 'text-[#ff6a00] bg-orange-50' : 'text-gray-600 hover:text-[#ff6a00] hover:bg-orange-50/50' }} rounded-lg" style="font-family: 'Inter', sans-serif;">Home</a></li>
                <li><a href="{{ route('about') }}" class="block py-2.5 px-3 text-sm font-semibold {{ request()->routeIs('about') ? 'text-[#ff6a00] bg-orange-50' : 'text-gray-600 hover:text-[#ff6a00] hover:bg-orange-50/50' }} rounded-lg" style="font-family: 'Inter', sans-serif;">About</a></li>
                <li><a href="{{ route('services') }}" class="block py-2.5 px-3 text-sm font-semibold {{ request()->routeIs('services') ? 'text-[#ff6a00] bg-orange-50' : 'text-gray-600 hover:text-[#ff6a00] hover:bg-orange-50/50' }} rounded-lg" style="font-family: 'Inter', sans-serif;">Services</a></li>
                <li><a href="{{ route('portfolio') }}" class="block py-2.5 px-3 text-sm font-semibold {{ request()->routeIs('portfolio') ? 'text-[#ff6a00] bg-orange-50' : 'text-gray-600 hover:text-[#ff6a00] hover:bg-orange-50/50' }} rounded-lg" style="font-family: 'Inter', sans-serif;">Portofolio</a></li>
                <li><a href="{{ route('contact') }}" class="block py-2.5 px-3 text-sm font-semibold {{ request()->routeIs('contact') ? 'text-[#ff6a00] bg-orange-50' : 'text-gray-600 hover:text-[#ff6a00] hover:bg-orange-50/50' }} rounded-lg" style="font-family: 'Inter', sans-serif;">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<script>
(function() {
    var toggle = document.getElementById('nav-toggle');
    var menu = document.getElementById('nav-menu');
    var iconMenu = document.getElementById('nav-icon-menu');
    var iconClose = document.getElementById('nav-icon-close');
    if (!toggle || !menu) return;
    toggle.addEventListener('click', function() {
        var isOpen = !menu.classList.contains('hidden');
        menu.classList.toggle('hidden', isOpen);
        if (iconMenu) iconMenu.classList.toggle('hidden', !isOpen);
        if (iconClose) iconClose.classList.toggle('hidden', isOpen);
    });
})();
</script>
