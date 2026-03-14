filepath = r'c:\laragon\www\techno\resources\views\user\home.blade.php'
with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

old = (
    '            {{-- Fallback if no services in DB yet --}}\n'
    '            <div class="service-card bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-lg p-6 lg:p-8 transition-shadow duration-300 group">\n'
    '                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-gray-900 to-gray-800 flex items-center justify-center mb-8 transform group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300 shadow-lg">\n'
    '                    <span class="text-3xl text-white flex items-center justify-center child-svg-white">\n'
    '                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>\n'
    '                    </span>\n'
    '                </div>\n'
    '                <h3 class="text-xl font-bold text-gray-900 mb-3" style="font-family: \'Montserrat\', sans-serif;">Automotive Exhibition & Mall Activation</h3>\n'
    '                <p class="text-gray-600 leading-relaxed" style="font-family: \'Inter\', sans-serif;">Aktivasi merek di mall dan pameran otomotif dengan konsep kreatif dan eksekusi profesional.</p>\n'
    '            </div>\n'
)

new = (
    '            {{-- Fallback if no services in DB yet --}}\n'
    '            <div class="service-card">\n'
    '                <div class="service-icon">\n'
    '                    <i class="bi bi-briefcase"></i>\n'
    '                </div>\n'
    '                <h4>Automotive Exhibition &amp; Mall Activation</h4>\n'
    '                <p>Aktivasi merek di mall dan pameran otomotif dengan konsep kreatif dan eksekusi profesional.</p>\n'
    '            </div>\n'
)

if old in content:
    content = content.replace(old, new, 1)
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
    print('SUCCESS: Fallback card replaced.')
else:
    print('ERROR: Could not find target block.')
