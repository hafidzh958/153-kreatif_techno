<aside class="w-64 bg-gray-800 text-white min-h-screen py-4">
    <div class="px-4 mb-6">
        <a href="{{ route('admin.dashboard') }}" class="text-xl font-semibold">Admin</a>
    </div>
    <ul class="space-y-1 px-2">
        <li><a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700' : '' }}">Dashboard</a></li>
        <li><a href="{{ route('admin.services.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('admin.services.*') ? 'bg-gray-700' : '' }}">Services</a></li>
        <li><a href="{{ route('admin.portfolio.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('admin.portfolio.*') ? 'bg-gray-700' : '' }}">Portfolio</a></li>
        <li><a href="{{ route('admin.contact.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('admin.contact.*') ? 'bg-gray-700' : '' }}">Contact</a></li>
        <li><a href="{{ route('home') }}" class="block px-4 py-2 rounded hover:bg-gray-700" target="_blank">View Website</a></li>
    </ul>
</aside>
