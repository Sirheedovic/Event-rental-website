@extends('layouts.main')

@section('title', 'Richy Events Lagos - Premium Event Rentals')

@section('content')
<div class="bg-gradient-to-br from-purple-600 via-pink-600 to-indigo-700 dark:from-purple-900 dark:via-pink-900 dark:to-indigo-900 text-white py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="container mx-auto text-center relative z-10 px-4">
        <h1 id="hero-title" class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight opacity-0 transform translate-y-8">Richy Events Lagos</h1>
        <p id="hero-subtitle" class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto opacity-0 transform translate-y-8">Creating Unforgettable Moments Across Lagos Island with Premium Event Equipment & Services</p>
        <div class="space-x-4">
            <a id="hero-button" href="#services" class="inline-block bg-white text-purple-600 px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 hover:scale-105 transform transition duration-300 shadow-xl opacity-0 translate-y-8">Explore Services</a>
            <a id="quote-button" href="#quick-quote" class="inline-block bg-gradient-to-r from-green-500 to-green-600 text-white px-8 py-4 rounded-full font-bold text-lg hover:from-green-600 hover:to-green-700 hover:scale-105 transform transition duration-300 shadow-xl opacity-0 translate-y-8">Quick Quote</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const title = document.getElementById('hero-title');
        const subtitle = document.getElementById('hero-subtitle');
        const button = document.getElementById('hero-button');
        
        setTimeout(() => {
            title.style.transition = 'all 1s ease-out';
            title.style.opacity = '1';
            title.style.transform = 'translateY(0)';
        }, 300);
        
        setTimeout(() => {
            subtitle.style.transition = 'all 1s ease-out';
            subtitle.style.opacity = '0.9';
            subtitle.style.transform = 'translateY(0)';
        }, 600);
        
        setTimeout(() => {
            button.style.transition = 'all 1s ease-out';
            button.style.opacity = '1';
            button.style.transform = 'translateY(0)';
            
            const quoteButton = document.getElementById('quote-button');
            quoteButton.style.transition = 'all 1s ease-out';
            quoteButton.style.opacity = '1';
            quoteButton.style.transform = 'translateY(0)';
        }, 900);
    });
</script>

<div id="services" class="container mx-auto py-20 px-4 dark:bg-gray-900">
    <h2 class="text-4xl font-bold text-center mb-4 text-gray-800 dark:text-white">Our Premium Services</h2>
    <p class="text-center text-gray-600 dark:text-gray-300 mb-16 text-lg">Serving Lagos Island with Excellence</p>
    
    @foreach($equipment as $category => $items)
        <div class="mb-16">
            <h3 class="text-3xl font-bold mb-8 capitalize text-purple-600 dark:text-purple-400 text-center">{{ $category }}</h3>
            
            @if(count($items) > 3)
                <!-- Horizontal Scrollable Container -->
                <div class="relative group">
                    <!-- Left Arrow -->
                    <button onclick="scrollCategory(this, 'left')" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 group-hover:opacity-100">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    
                    <!-- Right Arrow -->
                    <button onclick="scrollCategory(this, 'right')" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 group-hover:opacity-100">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    
                    <div class="flex overflow-x-auto gap-8 pb-4 snap-x snap-mandatory scrollbar-hide scroll-container" style="scroll-behavior: smooth;">
                        @foreach($items as $item)
                            <div class="flex-none w-80 snap-center">
                                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 group border border-gray-100 dark:border-gray-700 h-full">
                                    <div class="h-64 bg-gradient-to-br from-purple-100 to-pink-100 flex items-center justify-center relative overflow-hidden">
                                        @if($item->image)
                                            <img src="{{ $item->image }}" alt="{{ $item->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                        @else
                                            <div class="text-center">
                                                <div class="w-20 h-20 bg-purple-200 rounded-full flex items-center justify-center mx-auto mb-4">
                                                    <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                    </svg>
                                                </div>
                                                <span class="text-purple-600 font-semibold">{{ $item->category }}</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="p-8">
                                        <h4 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">{{ $item->name }}</h4>
                                        <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">{{ $item->description }}</p>
                                        <div class="flex justify-between items-center mb-6">
                                            <span class="text-3xl font-bold text-purple-600">₦{{ number_format($item->price_per_day * 500, 0) }}<span class="text-sm font-normal text-gray-500">/day</span></span>
                                            <span class="text-sm text-green-600 bg-green-50 px-3 py-2 rounded-full font-semibold">{{ $item->quantity_available }} available</span>
                                        </div>
                                        <button onclick="addToQuote('{{ $item->name }}', {{ $item->price_per_day * 500 }}, {{ $item->id }})" class="block w-full bg-gradient-to-r from-purple-600 to-pink-600 text-white text-center py-4 rounded-xl font-bold text-lg hover:from-purple-700 hover:to-pink-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                                            Add to Quote
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Scroll Indicator -->
                    <div class="text-center mt-4">
                        <p class="text-gray-500 text-sm">← Swipe to see more →</p>
                    </div>
                </div>
            @else
                <!-- Grid Layout for 3 or fewer items -->
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach($items as $item)
                        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 group border border-gray-100 dark:border-gray-700">
                            <div class="h-64 bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900 dark:to-pink-900 flex items-center justify-center relative overflow-hidden">
                                @if($item->image)
                                    <img src="{{ $item->image }}" alt="{{ $item->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                @else
                                    <div class="text-center">
                                        <div class="w-20 h-20 bg-purple-200 rounded-full flex items-center justify-center mx-auto mb-4">
                                            <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-purple-600 font-semibold">{{ $item->category }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="p-8">
                                <h4 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">{{ $item->name }}</h4>
                                <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">{{ $item->description }}</p>
                                <div class="flex justify-between items-center mb-6">
                                    <span class="text-3xl font-bold text-purple-600 dark:text-purple-400">₦{{ number_format($item->price_per_day * 500, 0) }}<span class="text-sm font-normal text-gray-500 dark:text-gray-400">/day</span></span>
                                    <span class="text-sm text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900 px-3 py-2 rounded-full font-semibold">{{ $item->quantity_available }} available</span>
                                </div>
                                <button onclick="addToQuote('{{ $item->name }}', {{ $item->price_per_day * 500 }}, {{ $item->id }})" class="block w-full bg-gradient-to-r from-purple-600 to-pink-600 text-white text-center py-4 rounded-xl font-bold text-lg hover:from-purple-700 hover:to-pink-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                                    Add to Quote
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    @endforeach
</div>

<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<script>
function scrollCategory(button, direction) {
    const container = button.parentElement.querySelector('.scroll-container');
    const scrollAmount = 350; // Width of one card plus gap
    
    if (direction === 'left') {
        container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    } else {
        container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
}
</script>

<div id="gallery" class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-4 text-gray-800 dark:text-white">Event Gallery</h2>
        <p class="text-center text-gray-600 dark:text-gray-300 mb-16 text-lg">See Our Beautiful Setups Across Lagos</p>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/IMG-20231124-WA0005.jpg.jpeg') }}" alt="Wedding Setup" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-lg font-bold">Wedding Setup</p>
                            <p class="text-sm">Victoria Island</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/IMG-20231124-WA0010.jpg.jpeg') }}" alt="Corporate Event" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-lg font-bold">Corporate Event</p>
                            <p class="text-sm">Ikoyi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/IMG-20231124-WA0015.jpg.jpeg') }}" alt="Birthday Party" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-lg font-bold">Birthday Party</p>
                            <p class="text-sm">Lekki</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/IMG-20240125-WA0008.jpg.jpeg') }}" alt="Event Setup" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-lg font-bold">Premium Setup</p>
                            <p class="text-sm">Lagos Island</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/IMG-20251203-WA0003.jpg.jpeg') }}" alt="Event Decoration" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-lg font-bold">Elegant Decoration</p>
                            <p class="text-sm">Victoria Island</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/IMG-20251203-WA0007.jpg.jpeg') }}" alt="Special Event" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-lg font-bold">Special Occasion</p>
                            <p class="text-sm">Lekki</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="quick-quote" class="bg-gray-50 dark:bg-gray-900 py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 dark:text-white mb-4">Quick Quote Request</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Select equipment and get instant quote via WhatsApp</p>
            <button onclick="loadCartToForm()" class="mt-4 inline-flex items-center gap-2 bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                Load from Cart
            </button>
        </div>
        
        <div class="max-w-6xl mx-auto bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-200 dark:border-gray-700">
            <form id="quote-form">
                <!-- Equipment Selection -->
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Select Equipment</h3>
                    
                    <div class="grid lg:grid-cols-2 gap-6">
                        @foreach($equipment as $category => $items)
                            <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-5 border border-gray-200 dark:border-gray-600">
                                <h4 class="text-xl font-bold mb-4 capitalize text-purple-600 dark:text-purple-400">{{ $category }}</h4>
                                @foreach($items as $item)
                                    <div class="flex items-center mb-3 p-3 rounded-lg hover:bg-white dark:hover:bg-gray-600 transition-all">
                                        <input type="checkbox" class="w-5 h-5 text-purple-600 rounded border-gray-300 focus:ring-purple-500" data-name="{{ $item->name }}" data-price="{{ $item->price_per_day * 500 }}" onchange="toggleQuantity(this)">
                                        <div class="w-10 h-10 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center ml-3 mr-3">
                                            @php
                                                $itemName = strtolower($item->name);
                                                if (str_contains($itemName, 'chair')) {
                                                    $icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>';
                                                } elseif (str_contains($itemName, 'table')) {
                                                    $icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>';
                                                } elseif (str_contains($itemName, 'canopy') || str_contains($itemName, 'tent')) {
                                                    $icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3l8 8-8 8-8-8 8-8z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 8.5l7 7M15.5 8.5l-7 7"></path>';
                                                } elseif (str_contains($itemName, 'floor') || str_contains($itemName, 'dance')) {
                                                    $icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>';
                                                } elseif (str_contains($itemName, 'sound') || str_contains($itemName, 'audio')) {
                                                    $icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M9 5H7a2 2 0 00-2 2v6a2 2 0 002 2h2l3.5 4V1L9 5z"></path>';
                                                } else {
                                                    $icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>';
                                                }
                                            @endphp
                                            <svg class="w-5 h-5 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                {!! $icon !!}
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <div class="font-semibold text-gray-800 dark:text-white text-sm">{{ $item->name }}</div>
                                            <div class="text-purple-600 dark:text-purple-400 font-bold text-sm">₦{{ number_format($item->price_per_day * 500, 0) }}<span class="text-xs text-gray-500 dark:text-gray-400">/day</span></div>
                                        </div>
                                        <input type="number" min="1" value="1" class="w-16 p-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg text-center text-sm focus:border-purple-500 focus:ring-1 focus:ring-purple-500 disabled:bg-gray-100 dark:disabled:bg-gray-800 disabled:text-gray-400" disabled data-qty>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Custom Items -->
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Additional Items</h3>
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-5 border border-gray-200 dark:border-gray-600">
                        <div id="custom-items">
                            <div class="flex gap-3">
                                <input type="text" placeholder="Item name" class="flex-1 p-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                                <input type="number" placeholder="Qty" min="1" class="w-20 p-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-lg text-center focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                                <button type="button" onclick="addCustomItem()" class="bg-green-600 hover:bg-green-700 text-white px-4 rounded-lg transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Customer Details -->
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Your Details</h3>
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-5 border border-gray-200 dark:border-gray-600">
                        <div class="grid md:grid-cols-2 gap-4">
                            <input type="text" id="customer-name" placeholder="Your Full Name" required class="w-full p-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                            <input type="tel" id="customer-phone" placeholder="Phone Number" class="w-full p-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                            <input type="date" id="event-date" required class="w-full p-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                            <input type="number" id="event-days" placeholder="Number of days" min="1" value="1" required class="w-full p-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="button" onclick="sendToWhatsApp()" class="inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white bg-green-600 hover:bg-green-700 rounded-xl transition shadow-lg">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                        </svg>
                        Send to WhatsApp
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
let customItemCount = 0;

function toggleQuantity(checkbox) {
    const qtyInput = checkbox.parentElement.querySelector('[data-qty]');
    qtyInput.disabled = !checkbox.checked;
    if (!checkbox.checked) {
        qtyInput.value = 1;
    }
}

function addCustomItem() {
    const container = document.getElementById('custom-items');
    const inputs = container.querySelectorAll('input');
    const itemName = inputs[0].value.trim();
    const quantity = inputs[1].value.trim() || 1;
    
    if (itemName) {
        customItemCount++;
        const customDiv = document.createElement('div');
        customDiv.className = 'flex items-center gap-3 mb-2 p-2 bg-gray-100 dark:bg-gray-600 rounded-lg';
        customDiv.innerHTML = `
            <span class="flex-1 text-gray-800 dark:text-white">${itemName} (Qty: ${quantity})</span>
            <input type="hidden" name="custom[]" value="${itemName}|${quantity}">
            <button type="button" onclick="this.parentElement.remove()" class="text-red-500 hover:text-red-700">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        `;
        container.appendChild(customDiv);
        inputs[0].value = '';
        inputs[1].value = '';
    }
}

function sendToWhatsApp() {
    const form = document.getElementById('quote-form');
    const selectedEquipment = [];
    const customItems = [];
    let total = 0;
    
    // Get selected equipment with quantities
    const checkboxes = form.querySelectorAll('input[type="checkbox"]:checked');
    checkboxes.forEach(checkbox => {
        if (checkbox.dataset.name) {
            const name = checkbox.dataset.name;
            const price = parseInt(checkbox.dataset.price);
            const qty = parseInt(checkbox.parentElement.querySelector('[data-qty]').value) || 1;
            const itemTotal = price * qty;
            
            selectedEquipment.push(`${name} x${qty} - ₦${price.toLocaleString()}/day each = ₦${itemTotal.toLocaleString()}/day`);
            total += itemTotal;
        }
    });
    
    // Get custom items
    const customInputs = form.querySelectorAll('input[name="custom[]"]');
    customInputs.forEach(input => {
        const [name, qty] = input.value.split('|');
        customItems.push(`${name} x${qty}`);
    });
    
    // Get customer details
    const customerName = document.getElementById('customer-name').value;
    const customerPhone = document.getElementById('customer-phone').value;
    const eventDate = document.getElementById('event-date').value;
    const eventDays = document.getElementById('event-days').value || 1;
    
    if (selectedEquipment.length === 0 && customItems.length === 0) {
        alert('Please select at least one item');
        return;
    }
    
    if (!customerName || !eventDate) {
        alert('Please fill in your name and event date');
        return;
    }
    
    // Calculate total for multiple days
    const totalCost = total * parseInt(eventDays);
    
    // Build WhatsApp message
    let message = `🎉 *QUOTE REQUEST - Richy Events Lagos*\n\n`;
    message += `👤 *Customer:* ${customerName}\n`;
    if (customerPhone) message += `📱 *Phone:* ${customerPhone}\n`;
    message += `📅 *Event Date:* ${eventDate}\n`;
    message += `⏰ *Duration:* ${eventDays} day(s)\n\n`;
    
    if (selectedEquipment.length > 0) {
        message += `📋 *SELECTED EQUIPMENT:*\n`;
        selectedEquipment.forEach(item => {
            message += `• ${item}\n`;
        });
        message += `\n`;
    }
    
    if (customItems.length > 0) {
        message += `➕ *ADDITIONAL ITEMS:*\n`;
        customItems.forEach(item => {
            message += `• ${item}\n`;
        });
        message += `\n`;
    }
    
    if (total > 0) {
        message += `💰 *Estimated Total:* ₦${totalCost.toLocaleString()} (${eventDays} day(s))\n\n`;
    }
    
    message += `Please prepare detailed invoice with availability confirmation. Thank you! 🙏`;
    
    // Send to WhatsApp
    const whatsappUrl = `https://wa.me/2348106812381?text=${encodeURIComponent(message)}`;
    window.open(whatsappUrl, '_blank');
}
</script>

<div id="about" class="py-20">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-12 text-gray-800">Why Choose Richy Events Lagos?</h2>
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="bg-white p-10 rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 border border-gray-100">
                <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Premium Quality</h3>
                <p class="text-gray-600 leading-relaxed">Top-tier equipment maintained to perfection for your special moments</p>
            </div>
            <div class="bg-white p-10 rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 border border-gray-100">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Lagos Island Coverage</h3>
                <p class="text-gray-600 leading-relaxed">Serving Victoria Island, Ikoyi, Lekki, and all of Lagos Island</p>
            </div>
            <div class="bg-white p-10 rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 border border-gray-100">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Fast Response</h3>
                <p class="text-gray-600 leading-relaxed">Quick setup, timely delivery, and professional service every time</p>
            </div>
        </div>
        
        <div class="mt-16">
            <a href="https://wa.me/2348106812381?text=Hello%20Richy%20Events!%20I'd%20like%20to%20discuss%20my%20event%20requirements" target="_blank" class="inline-block bg-gradient-to-r from-green-500 to-green-600 text-white px-12 py-4 rounded-full font-bold text-xl hover:from-green-600 hover:to-green-700 transform hover:scale-105 transition-all duration-300 shadow-xl">
                Chat with Us on WhatsApp
            </a>
        </div>
    </div>
</div>

<!-- Floating Quick Quote Widget -->
<div id="quote-widget" class="fixed bottom-24 right-6 z-40">
    <!-- Floating Button -->
    <button onclick="toggleQuoteCart()" class="relative bg-gradient-to-r from-purple-500 to-pink-600 text-white rounded-full p-4 shadow-2xl hover:shadow-3xl hover:scale-110 transition-all duration-300">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
        </svg>
        <span id="cart-badge" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-6 h-6 flex items-center justify-center hidden animate-bounce">0</span>
    </button>
    
    <!-- Cart Panel -->
    <div id="quote-cart" class="hidden absolute bottom-20 right-0 w-96 max-h-[600px] bg-white dark:bg-gray-800 rounded-2xl shadow-2xl overflow-hidden border-2 border-purple-200 dark:border-purple-700">
        <div class="bg-gradient-to-r from-purple-600 to-pink-600 text-white p-4 flex justify-between items-center">
            <h3 class="text-xl font-bold">Quick Quote</h3>
            <button onclick="toggleQuoteCart()" class="hover:bg-white/20 rounded-full p-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <div id="cart-items" class="p-4 max-h-80 overflow-y-auto">
            <p class="text-gray-500 dark:text-gray-400 text-center py-8">No items added yet</p>
        </div>
        
        <div class="border-t border-gray-200 dark:border-gray-700 p-4">
            <div class="flex justify-between items-center mb-4">
                <span class="font-bold text-gray-800 dark:text-white">Total:</span>
                <span id="cart-total" class="text-2xl font-bold text-purple-600 dark:text-purple-400">₦0</span>
            </div>
            <button onclick="sendQuoteToWhatsApp()" class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-xl font-bold flex items-center justify-center gap-2 transition mb-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                </svg>
                Send to WhatsApp
            </button>
            <button onclick="clearCart()" class="w-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white py-2 rounded-xl font-semibold transition text-sm">
                Clear Cart
            </button>
        </div>
    </div>
</div>

<script>
// Quote Cart Management
let quoteCart = JSON.parse(localStorage.getItem('quoteCart')) || [];

function addToQuote(name, price, id) {
    const existingItem = quoteCart.find(item => item.id === id);
    
    if (existingItem) {
        existingItem.quantity++;
    } else {
        quoteCart.push({ id, name, price, quantity: 1 });
    }
    
    localStorage.setItem('quoteCart', JSON.stringify(quoteCart));
    updateCartUI();
    showNotification(`${name} added to quote!`);
}

function removeFromQuote(id) {
    quoteCart = quoteCart.filter(item => item.id !== id);
    localStorage.setItem('quoteCart', JSON.stringify(quoteCart));
    updateCartUI();
}

function clearCart() {
    if (quoteCart.length === 0) return;
    
    if (confirm('Clear all items from cart?')) {
        quoteCart = [];
        localStorage.setItem('quoteCart', JSON.stringify(quoteCart));
        updateCartUI();
        showNotification('Cart cleared!');
    }
}

function updateQuantity(id, change) {
    const item = quoteCart.find(item => item.id === id);
    if (item) {
        item.quantity = Math.max(1, item.quantity + change);
        localStorage.setItem('quoteCart', JSON.stringify(quoteCart));
        updateCartUI();
    }
}

function updateCartUI() {
    const badge = document.getElementById('cart-badge');
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    
    const itemCount = quoteCart.reduce((sum, item) => sum + item.quantity, 0);
    
    if (itemCount > 0) {
        badge.textContent = itemCount;
        badge.classList.remove('hidden');
    } else {
        badge.classList.add('hidden');
    }
    
    if (quoteCart.length === 0) {
        cartItems.innerHTML = '<p class="text-gray-500 dark:text-gray-400 text-center py-8">No items added yet</p>';
        cartTotal.textContent = '₦0';
        return;
    }
    
    let total = 0;
    cartItems.innerHTML = quoteCart.map(item => {
        const itemTotal = item.price * item.quantity;
        total += itemTotal;
        return `
            <div class="flex items-center gap-3 mb-3 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                <div class="flex-1">
                    <div class="font-semibold text-gray-800 dark:text-white text-sm">${item.name}</div>
                    <div class="text-purple-600 dark:text-purple-400 font-bold text-sm">₦${item.price.toLocaleString()}/day</div>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="updateQuantity(${item.id}, -1)" class="w-7 h-7 bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                        </svg>
                    </button>
                    <span class="w-8 text-center font-bold text-gray-800 dark:text-white">${item.quantity}</span>
                    <button onclick="updateQuantity(${item.id}, 1)" class="w-7 h-7 bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </div>
                <button onclick="removeFromQuote(${item.id})" class="text-red-500 hover:text-red-700">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        `;
    }).join('');
    
    cartTotal.textContent = `₦${total.toLocaleString()}`;
}

function toggleQuoteCart() {
    const cart = document.getElementById('quote-cart');
    cart.classList.toggle('hidden');
}

function sendQuoteToWhatsApp() {
    if (quoteCart.length === 0) {
        alert('Please add items to your quote first');
        return;
    }
    
    let message = '🎉 *QUICK QUOTE REQUEST - Richy Events Lagos*\n\n';
    message += '📋 *SELECTED EQUIPMENT:*\n';
    
    let total = 0;
    quoteCart.forEach(item => {
        const itemTotal = item.price * item.quantity;
        total += itemTotal;
        message += `• ${item.name} x${item.quantity} - ₦${item.price.toLocaleString()}/day = ₦${itemTotal.toLocaleString()}/day\n`;
    });
    
    message += `\n💰 *Daily Total:* ₦${total.toLocaleString()}\n\n`;
    message += 'Please provide availability and final quote. Thank you! 🙏';
    
    const whatsappUrl = `https://wa.me/2348106812381?text=${encodeURIComponent(message)}`;
    window.open(whatsappUrl, '_blank');
}

function showNotification(text) {
    const notification = document.createElement('div');
    notification.className = 'fixed top-6 right-6 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 animate-fade-in';
    notification.textContent = text;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.opacity = '0';
        notification.style.transition = 'opacity 0.3s';
        setTimeout(() => notification.remove(), 300);
    }, 2000);
}

// Initialize cart on page load
document.addEventListener('DOMContentLoaded', function() {
    updateCartUI();
});

function loadCartToForm() {
    if (quoteCart.length === 0) {
        alert('Your cart is empty. Add items first!');
        return;
    }
    
    // Uncheck all checkboxes first
    const checkboxes = document.querySelectorAll('#quote-form input[type="checkbox"]');
    checkboxes.forEach(cb => {
        cb.checked = false;
        toggleQuantity(cb);
    });
    
    // Check and set quantities for cart items
    quoteCart.forEach(cartItem => {
        const checkbox = document.querySelector(`#quote-form input[data-name="${cartItem.name}"]`);
        if (checkbox) {
            checkbox.checked = true;
            toggleQuantity(checkbox);
            const qtyInput = checkbox.parentElement.querySelector('[data-qty]');
            if (qtyInput) {
                qtyInput.value = cartItem.quantity;
            }
        }
    });
    
    // Scroll to form
    document.getElementById('quick-quote').scrollIntoView({ behavior: 'smooth' });
    showNotification('Cart items loaded to form!');
}
</script>

<style>
@keyframes fade-in {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fade-in {
    animation: fade-in 0.3s ease-out;
}
</style>
@endsection