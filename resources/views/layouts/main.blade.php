<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Richy Events Lagos')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>html { scroll-behavior: smooth; }</style>
</head>
<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900">
    <nav class="bg-white dark:bg-gray-900 shadow-lg sticky top-0 z-40 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-2 md:py-4">

                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center flex-shrink-0">
                    <img src="{{ asset('images/richy-new.png') }}" alt="Richy Events Lagos" class="h-16 sm:h-20 md:h-24 w-auto object-contain dark:brightness-0 dark:invert dark:opacity-90">
                </a>

                <!-- Desktop Nav Links -->
                <div class="hidden lg:flex items-center space-x-1">
                    <a href="#" class="px-4 py-2 text-sm font-semibold text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 rounded-lg hover:bg-purple-50 dark:hover:bg-gray-800 transition">Home</a>
                    <a href="#services" class="px-4 py-2 text-sm font-semibold text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 rounded-lg hover:bg-purple-50 dark:hover:bg-gray-800 transition">Services</a>
                    <a href="#gallery" class="px-4 py-2 text-sm font-semibold text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 rounded-lg hover:bg-purple-50 dark:hover:bg-gray-800 transition">Gallery</a>
                    <a href="#about" class="px-4 py-2 text-sm font-semibold text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 rounded-lg hover:bg-purple-50 dark:hover:bg-gray-800 transition">About</a>
                    <a href="#footer" class="px-4 py-2 text-sm font-semibold text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 rounded-lg hover:bg-purple-50 dark:hover:bg-gray-800 transition">Contact</a>
                </div>

                <!-- Right Actions -->
                <div class="flex items-center gap-1 sm:gap-2">

                    <!-- Build Your Quote -->
                    <a href="#quick-quote" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 text-sm font-bold text-purple-600 dark:text-purple-400 border-2 border-purple-500 dark:border-purple-500 rounded-full hover:bg-purple-600 hover:text-white dark:hover:bg-purple-600 dark:hover:text-white transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        Build Your Quote
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/2348106812381?text=Hello%20Richy%20Events!%20I'm%20interested%20in%20your%20event%20rental%20services" target="_blank" class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white px-3 py-2 sm:px-5 sm:py-2.5 rounded-full text-sm font-semibold shadow transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.700"/>
                        </svg>
                        <span class="hidden sm:inline">WhatsApp</span>
                    </a>

                    <!-- Dark Mode Toggle -->
                    <button onclick="toggleDarkMode()" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                        <svg id="theme-toggle-dark-icon" class="w-7 h-7 text-gray-700 dark:text-gray-200 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="w-7 h-7 text-gray-700 dark:text-gray-200 block dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <!-- Mobile Menu Toggle -->
                    <button onclick="toggleMobileMenu()" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                        <svg id="mobile-menu-open" class="w-8 h-8 text-gray-700 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg id="mobile-menu-close" class="w-8 h-8 text-gray-700 dark:text-gray-200 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden lg:hidden pb-4 border-t border-gray-100 dark:border-gray-700 mt-2 pt-3">
                <div class="flex flex-col space-y-1">
                    <a href="#" class="px-4 py-2 text-sm font-semibold text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 rounded-lg hover:bg-purple-50 dark:hover:bg-gray-800 transition">Home</a>
                    <a href="#services" class="px-4 py-2 text-sm font-semibold text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 rounded-lg hover:bg-purple-50 dark:hover:bg-gray-800 transition">Services</a>
                    <a href="#gallery" class="px-4 py-2 text-sm font-semibold text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 rounded-lg hover:bg-purple-50 dark:hover:bg-gray-800 transition">Gallery</a>
                    <a href="#about" class="px-4 py-2 text-sm font-semibold text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 rounded-lg hover:bg-purple-50 dark:hover:bg-gray-800 transition">About</a>
                    <a href="#footer" class="px-4 py-2 text-sm font-semibold text-gray-700 dark:text-gray-200 hover:text-purple-600 dark:hover:text-purple-400 rounded-lg hover:bg-purple-50 dark:hover:bg-gray-800 transition">Contact</a>
                    <a href="#quick-quote" class="mt-2 px-4 py-2 text-sm font-bold text-purple-600 dark:text-purple-400 border-2 border-purple-500 rounded-full text-center hover:bg-purple-600 hover:text-white transition">Build Your Quote</a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const open = document.getElementById('mobile-menu-open');
            const close = document.getElementById('mobile-menu-close');
            menu.classList.toggle('hidden');
            open.classList.toggle('hidden');
            close.classList.toggle('hidden');
        }

        // Close the mobile menu after tapping a link so it doesn't cover the section
        document.querySelectorAll('#mobile-menu a').forEach(link => link.addEventListener('click', toggleMobileMenu));
    </script>

    <script>
        // Dark mode toggle function
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
        }

        // Check for saved dark mode preference on page load
        if (localStorage.getItem('darkMode') === 'true') {
            document.documentElement.classList.add('dark');
        }
    </script>

    {{-- overflow-x-clip stops slide-in animations widening the page on phones, without breaking the sticky nav --}}
    <main class="overflow-x-clip">
        @yield('content')
    </main>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/2348106812381?text=Hello%20Richy%20Events!%20I'm%20interested%20in%20your%20event%20rental%20services" target="_blank" class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 bg-green-500 text-white p-3 sm:p-4 rounded-full shadow-lg hover:bg-green-600 transition-all duration-300 hover:scale-110 z-50">
        <svg class="w-7 h-7 sm:w-8 sm:h-8" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.700"/>
        </svg>
    </a>

    <footer id="footer" class="bg-gray-900 dark:bg-black text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <div class="flex items-center justify-center gap-4 mb-4">
                <img src="{{ asset('images/richy-new.png') }}" alt="Richy Events Lagos" class="h-16 w-auto object-contain dark:brightness-0 dark:invert dark:opacity-90">
                <h3 class="text-2xl font-bold text-purple-400">Richy Events Lagos</h3>
            </div>
            <p class="text-gray-300 mb-4 text-base">Premium Event Equipment Rentals Across Lagos Island</p>
            <p class="text-gray-400 text-sm">&copy; 2024 Richy Events Lagos. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>