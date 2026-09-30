@extends('layouts.main')

@section('title', 'Richy Events Lagos - Premium Event Rentals')

@section('content')
<div class="bg-gradient-to-br from-purple-600 via-pink-600 to-indigo-700 dark:from-purple-900 dark:via-pink-900 dark:to-indigo-900 text-white py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="container mx-auto text-center relative z-10 px-4">
        <p id="hero-eyebrow" class="text-sm md:text-base font-semibold uppercase tracking-widest text-purple-200 mb-4">Richy Events Lagos</p>
        <h1 id="hero-title" class="text-4xl md:text-6xl lg:text-7xl font-bold mb-5 leading-tight">Create an Event<br>They'll Remember</h1>
        <p id="hero-subtitle" class="text-lg md:text-xl mb-10 max-w-2xl mx-auto text-purple-100">Premium event equipment and rentals across Lagos.</p>
        <div id="hero-buttons" class="flex flex-wrap justify-center gap-4 mb-12">
            <a href="#services" class="inline-block bg-white text-purple-600 px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 hover:scale-105 transform transition duration-300 shadow-xl">Explore Equipment</a>
            <a href="#quick-quote" class="inline-block bg-gradient-to-r from-green-500 to-green-600 text-white px-8 py-4 rounded-full font-bold text-lg hover:from-green-600 hover:to-green-700 hover:scale-105 transform transition duration-300 shadow-xl">Build Your Quote</a>
        </div>
        <div id="hero-trust" class="flex flex-wrap justify-center gap-6 md:gap-10">
            <span class="flex items-center gap-2 text-sm md:text-base font-semibold text-purple-100">
                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                Premium Equipment
            </span>
            <span class="flex items-center gap-2 text-sm md:text-base font-semibold text-purple-100">
                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                Reliable Delivery
            </span>
            <span class="flex items-center gap-2 text-sm md:text-base font-semibold text-purple-100">
                <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                Serving Lagos
            </span>
        </div>
    </div>
</div>

<style>
@keyframes fadeUp { from { opacity:0; transform:translateY(28px); } to { opacity:1; transform:translateY(0); } }
#hero-eyebrow { animation: fadeUp 0.7s ease-out 0.2s both; }
#hero-title   { animation: fadeUp 0.7s ease-out 0.4s both; }
#hero-subtitle{ animation: fadeUp 0.7s ease-out 0.6s both; }
#hero-buttons { animation: fadeUp 0.7s ease-out 0.8s both; }
#hero-trust   { animation: fadeUp 0.7s ease-out 1.0s both; }
</style>

<div id="services" class="container mx-auto py-20 px-4">
    <h2 class="text-4xl font-bold text-center mb-4 text-gray-800 dark:text-white">Our Premium Services</h2>
    <p class="text-center text-gray-600 dark:text-gray-300 mb-16 text-lg">Serving Lagos Island with Excellence</p>

    @foreach($equipment as $category => $items)
        <div class="mb-16">
            <h3 class="text-3xl font-bold mb-8 capitalize text-purple-600 dark:text-purple-400 text-center">{{ $category }}</h3>

            @if(count($items) > 3)
                <div class="relative group">
                    <button onclick="scrollCategory(this, 'left')" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 group-hover:opacity-100">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button onclick="scrollCategory(this, 'right')" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 group-hover:opacity-100">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    <div class="flex overflow-x-auto gap-6 pb-4 snap-x snap-mandatory scrollbar-hide scroll-container" style="scroll-behavior: smooth;">
                        @foreach($items as $item)
                            <div class="flex-none snap-start">
                                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 group border border-gray-100 dark:border-gray-700 h-full">
                                    <div class="h-64 bg-gradient-to-br from-purple-100 to-pink-100 flex items-center justify-center relative overflow-hidden">
                                        @if($item->image)
                                            <img src="/images/{{ rawurlencode(basename($item->image)) }}" alt="{{ $item->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                        @else
                                            <span class="text-purple-600 font-semibold">{{ $item->category }}</span>
                                        @endif
                                    </div>
                                    <div class="p-6">
                                        <h4 class="text-xl font-bold mb-2 text-gray-800 dark:text-white">{{ $item->name }}</h4>
                                        <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed text-sm">{{ $item->description }}</p>
                                        <div class="flex justify-between items-center mb-4">
                                            <span class="text-2xl font-bold text-purple-600 dark:text-purple-400">₦{{ number_format($item->price_per_day, 0) }}<span class="text-xs font-normal text-gray-500 dark:text-gray-400">/day</span></span>
                                            <span class="text-xs text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900 px-3 py-1 rounded-full font-semibold">{{ $item->quantity_available }} avail.</span>
                                        </div>
                                        <button onclick="addToQuote('{{ $item->name }}', {{ $item->price_per_day }}, {{ $item->id }}, {{ $item->quantity_available }})" class="block w-full bg-gradient-to-r from-purple-600 to-pink-600 text-white text-center py-3 rounded-xl font-bold hover:from-purple-700 hover:to-pink-700 transform hover:scale-105 transition-all duration-300 shadow-lg">
                                            Add to Quote
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center mt-4"><p class="text-gray-500 text-sm">← Swipe to see more →</p></div>
                </div>
            @else
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach($items as $item)
                        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 group border border-gray-100 dark:border-gray-700">
                            <div class="h-64 bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900 dark:to-pink-900 flex items-center justify-center relative overflow-hidden">
                                @if($item->image)
                                    <img src="/images/{{ rawurlencode(basename($item->image)) }}" alt="{{ $item->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                @else
                                    <span class="text-purple-600 font-semibold">{{ $item->category }}</span>
                                @endif
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-bold mb-2 text-gray-800 dark:text-white">{{ $item->name }}</h4>
                                <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed text-sm">{{ $item->description }}</p>
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-2xl font-bold text-purple-600 dark:text-purple-400">₦{{ number_format($item->price_per_day, 0) }}<span class="text-xs font-normal text-gray-500 dark:text-gray-400">/day</span></span>
                                    <span class="text-xs text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900 px-3 py-1 rounded-full font-semibold">{{ $item->quantity_available }} avail.</span>
                                </div>
                                <button onclick="addToQuote('{{ $item->name }}', {{ $item->price_per_day }}, {{ $item->id }}, {{ $item->quantity_available }})" class="block w-full bg-gradient-to-r from-purple-600 to-pink-600 text-white text-center py-3 rounded-xl font-bold hover:from-purple-700 hover:to-pink-700 transform hover:scale-105 transition-all duration-300 shadow-lg">
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
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    .scroll-container > div { width: calc(100% - 2rem); }
    @media (min-width: 768px) { .scroll-container > div { width: calc(50% - 1.5rem); } }
    @media (min-width: 1024px) { .scroll-container > div { width: calc(33.333% - 1.5rem); } }
</style>



<script>
function scrollCategory(button, direction) {
    const container = button.parentElement.querySelector('.scroll-container');
    const card = container.querySelector('div');
    const scrollAmount = card ? card.offsetWidth + 24 : 400;
    container.scrollBy({ left: direction === 'left' ? -scrollAmount : scrollAmount, behavior: 'smooth' });
}
</script>

<div id="gallery" class="bg-gray-50 dark:bg-gray-900 py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-gray-800 dark:text-white mb-3">Our Work</h2>
            <p class="text-gray-500 dark:text-gray-400 text-lg">Real events we've supplied across Lagos Island</p>
        </div>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-2 mb-10">
            @php $galleryFilters = ['All', 'Chairs', 'Tables', 'Canopies', 'Flooring']; @endphp
            @foreach($galleryFilters as $filter)
                <button onclick="filterSlider('{{ strtolower($filter) }}', this)"
                    class="gallery-filter px-5 py-2 rounded-full text-sm font-semibold border-2 transition-all duration-200 {{ $filter === 'All' ? 'bg-purple-600 border-purple-600 text-white' : 'bg-white dark:bg-gray-800 border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-300 hover:border-purple-400 hover:text-purple-600' }}"
                    data-filter="{{ strtolower($filter) }}">{{ $filter }}</button>
            @endforeach
        </div>

        @php
        $galleryItems = [
            ['src'=>'gold chairvary chair.jpg','label'=>'Gold Chiavari Chairs','location'=>'Victoria Island','category'=>'chairs'],
            ['src'=>'straight back vip chair.jpg','label'=>'VIP Straight Back Chairs','location'=>'Ikoyi','category'=>'chairs'],
            ['src'=>'excecutive vip chairs.jpg','label'=>'Executive VIP Chairs','location'=>'Lekki','category'=>'chairs'],
            ['src'=>'gold VIP chairs.jpg','label'=>'Gold VIP Chairs','location'=>'Lagos Island','category'=>'chairs'],
            ['src'=>'louis clear chair.jpg','label'=>'Louis Ghost Chairs','location'=>'Victoria Island','category'=>'chairs'],
            ['src'=>'clear chairs.jpg','label'=>'Clear Acrylic Chairs','location'=>'Ikoyi','category'=>'chairs'],
            ['src'=>'brown cross back chair.jpg','label'=>'Brown Crossback Chairs','location'=>'Lekki','category'=>'chairs'],
            ['src'=>'chameleon chairs.jpg','label'=>'Chameleon Chairs','location'=>'Lagos Island','category'=>'chairs'],
            ['src'=>'black belle chair.jpg','label'=>'Black Belle Chairs','location'=>'Victoria Island','category'=>'chairs'],
            ['src'=>'florence chair with a round  table.jpg','label'=>'Florence Chairs','location'=>'Ikoyi','category'=>'chairs'],
            ['src'=>'vip tables settings.jpg','label'=>'VIP Table Settings','location'=>'Victoria Island','category'=>'tables'],
            ['src'=>'clear acrlyic cchairs and round banquet table.jpg','label'=>'Round Banquet Tables','location'=>'Ikoyi','category'=>'tables'],
            ['src'=>'chameleon chairs and a roundtable.jpg','label'=>'Round Tables Setup','location'=>'Lekki','category'=>'tables'],
            ['src'=>'vip chairs and vip table.jpg','label'=>'VIP Chairs & Table','location'=>'Lagos Island','category'=>'tables'],
            ['src'=>'louis ghost chair and a table.jpg','label'=>'Louis Ghost & Table','location'=>'Victoria Island','category'=>'tables'],
            ['src'=>'15by30m marquee.jpg','label'=>'15x30m Marquee Tent','location'=>'Victoria Island','category'=>'canopies'],
            ['src'=>'15by60m marquee tent.jpg','label'=>'15x60m Marquee Tent','location'=>'Ikoyi','category'=>'canopies'],
            ['src'=>'20by20ft pagoda tent.jpg','label'=>'20x20ft Pagoda Tent','location'=>'Lekki','category'=>'canopies'],
            ['src'=>'transparent marquee.jpg','label'=>'Transparent Marquee','location'=>'Lagos Island','category'=>'canopies'],
            ['src'=>'white pagoda tent.jpg','label'=>'White Pagoda Tent','location'=>'Victoria Island','category'=>'canopies'],
            ['src'=>'pagoda festival.jpg','label'=>'Festival Pagoda Tent','location'=>'Ikoyi','category'=>'canopies'],
            ['src'=>'imported pagoda.jpg','label'=>'Imported Pagoda Tent','location'=>'Lekki','category'=>'canopies'],
            ['src'=>'marquee setup.jpg','label'=>'Marquee Setup','location'=>'Lagos Island','category'=>'canopies'],
            ['src'=>'20by40ft tent with flooring.jpg','label'=>'Tent with Flooring','location'=>'Victoria Island','category'=>'flooring'],
            ['src'=>'7by40ft green turf.jpg','label'=>'Green Turf 7x40ft','location'=>'Ikoyi','category'=>'flooring'],
            ['src'=>'large red rug.jpg','label'=>'Large Red Rug','location'=>'Lekki','category'=>'flooring'],
            ['src'=>'new green turfs.jpg','label'=>'New Green Turfs','location'=>'Lagos Island','category'=>'flooring'],
        ];
        @endphp

        <!-- Slider -->
        <div class="relative" id="gallery-slider-wrap">
            <!-- Slides -->
            <div class="overflow-hidden rounded-2xl shadow-2xl">
                <div id="gallery-track" class="flex transition-transform duration-500 ease-in-out">
                    @foreach($galleryItems as $i => $photo)
                        <div class="gallery-slide flex-none w-full relative" data-category="{{ $photo['category'] }}">
                            <div class="aspect-[16/7] bg-gray-200 dark:bg-gray-800">
                                <img src="/images/{{ rawurlencode($photo['src']) }}" alt="{{ $photo['label'] }}" class="w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent flex flex-col justify-end p-6 md:p-10">
                                <span class="inline-block bg-purple-600/80 backdrop-blur-sm text-white text-xs font-semibold px-3 py-1 rounded-full capitalize mb-3 w-fit">{{ $photo['category'] }}</span>
                                <p class="text-white font-bold text-xl md:text-3xl leading-tight">{{ $photo['label'] }}</p>
                                <p class="text-purple-200 text-sm mt-1 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                                    {{ $photo['location'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Prev / Next -->
            <button onclick="sliderMove(-1)" class="absolute left-3 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/70 text-white rounded-full p-3 transition z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button onclick="sliderMove(1)" class="absolute right-3 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/70 text-white rounded-full p-3 transition z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>

            <!-- Dots -->
            <div id="gallery-dots" class="flex justify-center gap-2 mt-5"></div>

            <!-- Counter -->
            <p class="text-center text-gray-400 dark:text-gray-500 text-sm mt-2">
                <span id="slide-current">1</span> / <span id="slide-total">1</span>
            </p>
        </div>

        <p id="gallery-empty" class="hidden text-center text-gray-400 dark:text-gray-500 py-16 text-lg">No photos in this category yet.</p>
    </div>
</div>

<script>
(function() {
    const allSlides = Array.from(document.querySelectorAll('.gallery-slide'));
    let filtered = [...allSlides];
    let current = 0;
    let autoTimer;

    function buildDots() {
        const dotsEl = document.getElementById('gallery-dots');
        dotsEl.innerHTML = filtered.map((_, i) =>
            `<button onclick="sliderGoTo(${i})" class="dot w-2.5 h-2.5 rounded-full transition-all duration-300 ${i === 0 ? 'bg-purple-600 w-6' : 'bg-gray-300 dark:bg-gray-600'}"></button>`
        ).join('');
        document.getElementById('slide-total').textContent = filtered.length;
    }

    function updateDots() {
        document.querySelectorAll('#gallery-dots .dot').forEach((d, i) => {
            d.className = `dot rounded-full transition-all duration-300 ${i === current ? 'bg-purple-600 w-6 h-2.5' : 'bg-gray-300 dark:bg-gray-600 w-2.5 h-2.5'}`;
        });
        document.getElementById('slide-current').textContent = current + 1;
    }

    function goTo(n) {
        if (!filtered.length) return;
        current = (n + filtered.length) % filtered.length;
        // Reorder track: put filtered slides in order, hide others
        const track = document.getElementById('gallery-track');
        allSlides.forEach(s => { s.style.display = 'none'; track.appendChild(s); });
        filtered.forEach(s => { s.style.display = ''; });
        track.style.transform = `translateX(-${current * 100}%)`;
        updateDots();
    }

    window.sliderMove = function(dir) { resetAuto(); goTo(current + dir); };
    window.sliderGoTo = function(n) { resetAuto(); goTo(n); };

    window.filterSlider = function(category, btn) {
        document.querySelectorAll('.gallery-filter').forEach(b => {
            b.classList.remove('bg-purple-600','border-purple-600','text-white');
            b.classList.add('bg-white','border-gray-200','text-gray-600');
        });
        btn.classList.add('bg-purple-600','border-purple-600','text-white');
        btn.classList.remove('bg-white','border-gray-200','text-gray-600');
        filtered = category === 'all' ? [...allSlides] : allSlides.filter(s => s.dataset.category === category);
        const empty = document.getElementById('gallery-empty');
        const wrap = document.getElementById('gallery-slider-wrap');
        if (!filtered.length) { wrap.style.display='none'; empty.classList.remove('hidden'); return; }
        wrap.style.display=''; empty.classList.add('hidden');
        current = 0;
        buildDots();
        goTo(0);
        resetAuto();
    };

    function resetAuto() {
        clearInterval(autoTimer);
        autoTimer = setInterval(() => goTo(current + 1), 4000);
    }

    // Init
    buildDots();
    goTo(0);
    resetAuto();

    // Touch/swipe support
    const track = document.getElementById('gallery-track');
    let touchStartX = 0;
    track.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
    track.addEventListener('touchend', e => {
        const diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 50) { resetAuto(); goTo(current + (diff > 0 ? 1 : -1)); }
    });
})();
</script>

<div id="quick-quote" class="bg-gradient-to-br from-gray-50 to-purple-50 dark:from-gray-900 dark:to-gray-800 py-20 overflow-hidden">
    <div class="max-w-screen-xl mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 dark:text-white mb-3">Build Your Event Quote</h2>
            <p class="text-xl text-gray-500 dark:text-gray-300">Select equipment, add your details, and send your quote in seconds</p>
        </div>

        <!-- Step Indicator -->
        <div class="flex items-center justify-center mb-12">
            <div class="step-indicator flex items-center gap-3" data-step="1">
                <div class="step-circle w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm bg-purple-600 text-white shadow-lg">01</div>
                <span class="font-semibold text-purple-600 dark:text-purple-400 hidden sm:block">Select Equipment</span>
            </div>
            <div class="w-12 h-0.5 bg-gray-300 dark:bg-gray-600 mx-2"></div>
            <div class="step-indicator flex items-center gap-3" data-step="2">
                <div class="step-circle w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm bg-gray-200 dark:bg-gray-700 text-gray-500 dark:text-gray-400">02</div>
                <span class="font-semibold text-gray-400 dark:text-gray-500 hidden sm:block">Event Details</span>
            </div>
            <div class="w-12 h-0.5 bg-gray-300 dark:bg-gray-600 mx-2"></div>
            <div class="step-indicator flex items-center gap-3" data-step="3">
                <div class="step-circle w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm bg-gray-200 dark:bg-gray-700 text-gray-500 dark:text-gray-400">03</div>
                <span class="font-semibold text-gray-400 dark:text-gray-500 hidden sm:block">Review &amp; Send</span>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8 items-start">
            <!-- Steps Panel -->
            <div class="flex-1 min-w-0">

                <!-- STEP 1 -->
                <div id="qb-step-1" class="qb-step">
                    <p id="qb-step1-err" class="hidden mb-4 p-3 bg-red-50 dark:bg-red-900/30 border border-red-200 dark:border-red-700 text-red-600 dark:text-red-400 rounded-xl text-sm font-semibold"></p>
                    @foreach($equipment as $category => $items)
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-4 capitalize text-purple-600 dark:text-purple-400 flex items-center gap-2">
                                <span class="w-2 h-6 bg-purple-600 rounded-full inline-block"></span>{{ $category }}
                            </h3>
                            <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-4">
                                @foreach($items as $item)
                                    @php
                                        $n = strtolower($item->name);
                                        if (str_contains($n,'chair')) $emoji='🪑';
                                        elseif (str_contains($n,'table')) $emoji='🪞';
                                        elseif (str_contains($n,'canopy')||str_contains($n,'tent')) $emoji='⛺';
                                        elseif (str_contains($n,'floor')||str_contains($n,'dance')) $emoji='💃';
                                        elseif (str_contains($n,'sound')||str_contains($n,'audio')) $emoji='🔊';
                                        else $emoji='✨';
                                    @endphp
                                    <div class="qb-item-card bg-white dark:bg-gray-800 rounded-2xl border-2 border-gray-200 dark:border-gray-700 p-4 cursor-pointer hover:border-purple-400 hover:shadow-lg transition-all duration-200 select-none"
                                         data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                         data-price="{{ $item->price_per_day }}" data-stock="{{ $item->quantity_available }}"
                                         onclick="qbToggleItem(this)">
                                        <div class="flex items-start justify-between mb-3">
                                            <span class="text-3xl">{{ $emoji }}</span>
                                            <span class="qb-check w-6 h-6 rounded-full border-2 border-gray-300 dark:border-gray-600 flex items-center justify-center transition-all">
                                                <svg class="w-3 h-3 text-white hidden" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                            </span>
                                        </div>
                                        <div class="font-bold text-gray-800 dark:text-white text-base mb-1">{{ $item->name }}</div>
                                        <div class="text-purple-600 dark:text-purple-400 font-bold text-base">₦{{ number_format($item->price_per_day, 0) }}<span class="text-sm text-gray-400 font-normal">/day</span></div>
                                        <div class="text-xs text-gray-400 mb-2">{{ $item->quantity_available }} available</div>
                                        <div class="qb-qty-row hidden mt-3" onclick="event.stopPropagation()">
                                            <p class="qb-stock-err hidden text-xs text-amber-600 dark:text-amber-400 mb-2 font-semibold"></p>
                                            <div class="flex items-center justify-between">
                                                <span class="text-sm text-gray-500 dark:text-gray-400">Quantity</span>
                                                <div class="flex items-center gap-2">
                                                    <button type="button" onclick="qbChangeQty(this,-1)" class="w-8 h-8 rounded-full bg-purple-100 dark:bg-purple-900 hover:bg-purple-200 text-purple-700 dark:text-purple-300 font-bold flex items-center justify-center text-xl leading-none transition">−</button>
                                                    <span class="qb-qty w-8 text-center font-bold text-gray-800 dark:text-white text-lg">1</span>
                                                    <button type="button" onclick="qbChangeQty(this,1)" class="w-8 h-8 rounded-full bg-purple-100 dark:bg-purple-900 hover:bg-purple-200 text-purple-700 dark:text-purple-300 font-bold flex items-center justify-center text-xl leading-none transition">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    <div class="flex justify-end mt-4">
                        <button onclick="qbGoStep(2)" class="bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white px-8 py-3 rounded-xl font-bold text-lg shadow-lg transition-all">Next: Event Details →</button>
                    </div>
                </div>

                <!-- STEP 2 -->
                <div id="qb-step-2" class="qb-step hidden">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 p-8">
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Tell us about your event</h3>
                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-600 dark:text-gray-300 mb-1">Full Name <span class="text-red-500">*</span></label>
                                <input type="text" id="qb-name" placeholder="e.g. Adaeze Okonkwo" autocomplete="name"
                                    class="qb-field w-full p-4 text-base border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition">
                                <p class="qb-error hidden mt-1 text-sm text-red-500" id="err-name"></p>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-600 dark:text-gray-300 mb-1">Phone Number <span class="text-red-500">*</span></label>
                                <input type="tel" id="qb-phone" placeholder="e.g. 08012345678" autocomplete="tel"
                                    class="qb-field w-full p-4 text-base border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition">
                                <p class="qb-error hidden mt-1 text-sm text-red-500" id="err-phone"></p>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-600 dark:text-gray-300 mb-1">Event Date <span class="text-red-500">*</span></label>
                                <input type="date" id="qb-date"
                                    class="qb-field w-full p-4 text-base border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition">
                                <p class="qb-error hidden mt-1 text-sm text-red-500" id="err-date"></p>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-600 dark:text-gray-300 mb-1">Event Location <span class="text-red-500">*</span></label>
                                <input type="text" id="qb-location" placeholder="e.g. Victoria Island, Lagos"
                                    class="qb-field w-full p-4 text-base border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition">
                                <p class="qb-error hidden mt-1 text-sm text-red-500" id="err-location"></p>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-semibold text-gray-600 dark:text-gray-300 mb-1">Number of Days <span class="text-red-500">*</span></label>
                                <input type="number" id="qb-days" min="1" value="1"
                                    class="qb-field w-full p-4 text-base border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition"
                                    oninput="qbUpdateSummary()">
                                <p class="qb-error hidden mt-1 text-sm text-red-500" id="err-days"></p>
                            </div>
                        </div>
                        <div class="flex justify-between mt-8">
                            <button onclick="qbGoStep(1)" class="text-gray-500 dark:text-gray-400 hover:text-purple-600 font-semibold px-6 py-3 rounded-xl border border-gray-300 dark:border-gray-600 hover:border-purple-400 transition">← Back</button>
                            <button onclick="qbGoStep(3)" class="bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white px-8 py-3 rounded-xl font-bold text-lg shadow-lg transition-all">Review Quote →</button>
                        </div>
                    </div>
                </div>

                <!-- STEP 3 -->
                <div id="qb-step-3" class="qb-step hidden">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700 p-8">
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Review Your Quote</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">Please confirm everything looks correct before sending.</p>
                        <div id="qb-review-content" class="mb-6"></div>
                        <div class="bg-amber-50 dark:bg-amber-900/30 border border-amber-200 dark:border-amber-700 rounded-xl p-4 mb-6 flex gap-3">
                            <svg class="w-5 h-5 text-amber-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                            <p class="text-sm text-amber-700 dark:text-amber-300">This is an <strong>estimated quote only</strong>. Final pricing will be confirmed by Richy Events Lagos based on availability, delivery distance, and setup requirements.</p>
                        </div>
                        <div class="flex justify-between mt-6">
                            <button onclick="qbGoStep(2)" class="text-gray-500 dark:text-gray-400 hover:text-purple-600 font-semibold px-6 py-3 rounded-xl border border-gray-300 dark:border-gray-600 hover:border-purple-400 transition">← Edit Details</button>
                            <button onclick="qbSendWhatsApp()" class="inline-flex items-center gap-3 bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-xl font-bold text-lg shadow-lg transition-all">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/></svg>
                                Confirm &amp; Send via WhatsApp
                            </button>
                        </div>
                    </div>
                </div>

            </div><!-- end steps panel -->

            <!-- Sidebar -->
            <div class="w-full lg:w-80 xl:w-96 flex-shrink-0">
                <div class="sticky top-24 bg-white dark:bg-gray-800 rounded-2xl shadow-xl border-2 border-purple-100 dark:border-purple-900 overflow-hidden">
                    <div class="bg-gradient-to-r from-purple-600 to-pink-600 px-6 py-4">
                        <h3 class="text-white font-bold text-lg">Your Quote</h3>
                        <p class="text-purple-100 text-sm">Updates in real time</p>
                    </div>
                    <div id="qb-summary-items" class="px-6 py-4 max-h-72 overflow-y-auto">
                        <p class="text-gray-400 dark:text-gray-500 text-sm text-center py-6">No items selected yet</p>
                    </div>
                    <div class="border-t border-gray-100 dark:border-gray-700 px-6 py-4">
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-500 dark:text-gray-400 text-sm">Daily subtotal</span>
                            <span id="qb-daily-total" class="font-bold text-gray-800 dark:text-white">₦0</span>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-gray-500 dark:text-gray-400 text-sm">Est. total (<span id="qb-days-label">1</span> day)</span>
                            <span id="qb-grand-total" class="text-xl font-bold text-purple-600 dark:text-purple-400">₦0</span>
                        </div>
                        <button onclick="qbGoStep(2)" id="qb-review-btn" class="w-full bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white py-3 rounded-xl font-bold transition-all shadow-md disabled:opacity-40 disabled:cursor-not-allowed" disabled>
                            Review Quote
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
const qbItems = {};

function qbFieldError(id, msg) {
    const el = document.getElementById('err-' + id);
    if (!el) return;
    if (msg) { el.textContent = msg; el.classList.remove('hidden'); }
    else     { el.textContent = ''; el.classList.add('hidden'); }
}
function qbFieldBorder(el, hasError) {
    el.classList.toggle('border-red-500', hasError);
    el.classList.toggle('border-gray-300', !hasError);
}
function normalizeNigerianPhone(raw) {
    let p = raw.replace(/\s+/g,'').replace(/-/g,'');
    if (/^0[789]\d{9}$/.test(p))      return '+234' + p.slice(1);
    if (/^234[789]\d{9}$/.test(p))    return '+' + p;
    if (/^\+234[789]\d{9}$/.test(p))  return p;
    return null;
}
function generateRef() {
    return 'REL-' + new Date().getFullYear() + '-' + Math.floor(10000 + Math.random() * 90000);
}

function qbToggleItem(card) {
    const id = card.dataset.id, name = card.dataset.name;
    const price = parseInt(card.dataset.price), stock = parseInt(card.dataset.stock) || 9999;
    const qtyRow = card.querySelector('.qb-qty-row');
    const check = card.querySelector('.qb-check');
    const checkIcon = check.querySelector('svg');
    const errEl = card.querySelector('.qb-stock-err');
    if (qbItems[id]) {
        delete qbItems[id];
        card.classList.remove('border-purple-500','bg-purple-50','dark:bg-purple-950');
        check.classList.remove('bg-purple-600','border-purple-600');
        checkIcon.classList.add('hidden');
        qtyRow.classList.add('hidden');
        if (errEl) errEl.classList.add('hidden');
    } else {
        qbItems[id] = { name, price, qty: 1, stock };
        card.classList.add('border-purple-500','bg-purple-50','dark:bg-purple-950');
        check.classList.add('bg-purple-600','border-purple-600');
        checkIcon.classList.remove('hidden');
        qtyRow.classList.remove('hidden');
    }
    qbUpdateSummary();
}

function qbChangeQty(btn, delta) {
    const card = btn.closest('.qb-item-card');
    const id = card.dataset.id;
    if (!qbItems[id]) return;
    const item = qbItems[id];
    const errEl = card.querySelector('.qb-stock-err');
    const proposed = item.qty + delta;
    if (proposed < 1) return;
    if (proposed > item.stock) {
        if (errEl) { errEl.textContent = `⚠️ Only ${item.stock} available.`; errEl.classList.remove('hidden'); }
        return;
    }
    if (errEl) errEl.classList.add('hidden');
    item.qty = proposed;
    card.querySelector('.qb-qty').textContent = item.qty;
    qbUpdateSummary();
}

function qbUpdateSummary() {
    const days = Math.max(1, parseInt(document.getElementById('qb-days')?.value) || 1);
    const ids = Object.keys(qbItems);
    const summaryEl = document.getElementById('qb-summary-items');
    const dailyEl = document.getElementById('qb-daily-total');
    const grandEl = document.getElementById('qb-grand-total');
    const daysLabel = document.getElementById('qb-days-label');
    const reviewBtn = document.getElementById('qb-review-btn');
    if (ids.length === 0) {
        summaryEl.innerHTML = '<p class="text-gray-400 dark:text-gray-500 text-sm text-center py-6">No items selected yet</p>';
        dailyEl.textContent = '₦0'; grandEl.textContent = '₦0';
        if (reviewBtn) reviewBtn.disabled = true;
        return;
    }
    let daily = 0;
    summaryEl.innerHTML = ids.map(id => {
        const item = qbItems[id]; const sub = item.price * item.qty; daily += sub;
        return `<div class="flex justify-between items-center py-2 border-b border-gray-100 dark:border-gray-700 last:border-0">
            <div><div class="text-sm font-semibold text-gray-800 dark:text-white">${item.name}</div>
            <div class="text-xs text-gray-400">x${item.qty} × ₦${item.price.toLocaleString()}</div></div>
            <div class="text-sm font-bold text-purple-600 dark:text-purple-400">₦${sub.toLocaleString()}</div></div>`;
    }).join('');
    dailyEl.textContent = '₦' + daily.toLocaleString();
    daysLabel.textContent = days;
    grandEl.textContent = '₦' + (daily * days).toLocaleString();
    if (reviewBtn) reviewBtn.disabled = false;
}

function qbGoStep(n) {
    if (n === 2) {
        if (Object.keys(qbItems).length === 0) {
            const b = document.getElementById('qb-step1-err');
            b.textContent = '❌ Please select at least one equipment item.';
            b.classList.remove('hidden');
            b.scrollIntoView({ behavior: 'smooth', block: 'center' });
            return;
        }
        document.getElementById('qb-step1-err')?.classList.add('hidden');
    }
    if (n === 3 && !qbValidateStep2()) return;
    if (n === 3) qbBuildReview();
    document.querySelectorAll('.qb-step').forEach(s => s.classList.add('hidden'));
    document.getElementById('qb-step-' + n).classList.remove('hidden');
    document.querySelectorAll('.step-indicator').forEach(ind => {
        const step = parseInt(ind.dataset.step);
        const circle = ind.querySelector('.step-circle');
        const label = ind.querySelector('span:last-child');
        if (step === n) {
            circle.className = 'step-circle w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm bg-purple-600 text-white shadow-lg';
            label.className = 'font-semibold text-purple-600 dark:text-purple-400 hidden sm:block';
        } else if (step < n) {
            circle.className = 'step-circle w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm bg-green-500 text-white';
            label.className = 'font-semibold text-green-600 dark:text-green-400 hidden sm:block';
        } else {
            circle.className = 'step-circle w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm bg-gray-200 dark:bg-gray-700 text-gray-500 dark:text-gray-400';
            label.className = 'font-semibold text-gray-400 dark:text-gray-500 hidden sm:block';
        }
    });
}

function qbValidateStep2() {
    let ok = true;
    const nameEl = document.getElementById('qb-name');
    const name = nameEl.value.trim();
    if (!name || name.length < 3 || /^(.)\1+$/i.test(name)) {
        qbFieldError('name','Please enter your full name (at least 3 characters).');
        qbFieldBorder(nameEl, true); ok = false;
    } else { qbFieldError('name',''); qbFieldBorder(nameEl, false); }

    const phoneEl = document.getElementById('qb-phone');
    const normalized = normalizeNigerianPhone(phoneEl.value);
    if (!normalized) {
        qbFieldError('phone','Enter a valid Nigerian number e.g. 08012345678 or +2348012345678.');
        qbFieldBorder(phoneEl, true); ok = false;
    } else { phoneEl.value = normalized; qbFieldError('phone',''); qbFieldBorder(phoneEl, false); }

    const dateEl = document.getElementById('qb-date');
    const minDate = new Date(Date.now() + 24*60*60*1000); minDate.setHours(0,0,0,0);
    if (!dateEl.value || new Date(dateEl.value) < minDate) {
        qbFieldError('date','Event date must be at least 24 hours from today.');
        qbFieldBorder(dateEl, true); ok = false;
    } else { qbFieldError('date',''); qbFieldBorder(dateEl, false); }

    const locEl = document.getElementById('qb-location');
    if (!locEl.value.trim() || locEl.value.trim().length < 3) {
        qbFieldError('location','Please enter the event venue or location.');
        qbFieldBorder(locEl, true); ok = false;
    } else { qbFieldError('location',''); qbFieldBorder(locEl, false); }

    const daysEl = document.getElementById('qb-days');
    const daysVal = parseInt(daysEl.value);
    if (!daysVal || daysVal < 1 || !Number.isInteger(daysVal)) {
        qbFieldError('days','Number of days must be a whole number of at least 1.');
        qbFieldBorder(daysEl, true); ok = false;
    } else { qbFieldError('days',''); qbFieldBorder(daysEl, false); }

    if (!ok) document.getElementById('qb-step-2').querySelector('.qb-field.border-red-500')?.scrollIntoView({ behavior:'smooth', block:'center' });
    return ok;
}

function qbBuildReview() {
    const name = document.getElementById('qb-name').value.trim();
    const phone = document.getElementById('qb-phone').value.trim();
    const date = new Date(document.getElementById('qb-date').value);
    const dateStr = date.toLocaleDateString('en-NG', { day:'numeric', month:'long', year:'numeric' });
    const loc = document.getElementById('qb-location').value.trim();
    const days = parseInt(document.getElementById('qb-days').value) || 1;
    const ref = generateRef();
    const ids = Object.keys(qbItems);
    let daily = 0;
    const rows = ids.map(id => {
        const item = qbItems[id]; const sub = item.price * item.qty; daily += sub;
        return `<tr class="border-b border-gray-100 dark:border-gray-700">
            <td class="py-2 text-gray-800 dark:text-white">${item.name}</td>
            <td class="py-2 text-center text-gray-600 dark:text-gray-300">${item.qty}</td>
            <td class="py-2 text-right font-semibold text-purple-600 dark:text-purple-400">₦${sub.toLocaleString()}/day</td></tr>`;
    }).join('');
    const el = document.getElementById('qb-review-content');
    el.dataset.ref = ref; el.dataset.date = dateStr;
    el.innerHTML = `
        <div class="grid md:grid-cols-2 gap-3 mb-5 p-4 bg-gray-50 dark:bg-gray-700 rounded-xl text-sm">
            <div><span class="text-xs text-gray-400 uppercase tracking-wide">Name</span><p class="font-bold text-gray-800 dark:text-white">${name}</p></div>
            <div><span class="text-xs text-gray-400 uppercase tracking-wide">Phone</span><p class="font-bold text-gray-800 dark:text-white">${phone}</p></div>
            <div><span class="text-xs text-gray-400 uppercase tracking-wide">Event Date</span><p class="font-bold text-gray-800 dark:text-white">${dateStr}</p></div>
            <div><span class="text-xs text-gray-400 uppercase tracking-wide">Location</span><p class="font-bold text-gray-800 dark:text-white">${loc}</p></div>
            <div><span class="text-xs text-gray-400 uppercase tracking-wide">Duration</span><p class="font-bold text-gray-800 dark:text-white">${days} day${days>1?'s':''}</p></div>
            <div><span class="text-xs text-gray-400 uppercase tracking-wide">Quote Ref</span><p class="font-bold text-purple-600 dark:text-purple-400">${ref}</p></div>
        </div>
        <table class="w-full text-sm mb-4">
            <thead><tr class="text-left text-gray-400 text-xs uppercase tracking-wide">
                <th class="pb-2">Item</th><th class="pb-2 text-center">Qty</th><th class="pb-2 text-right">Subtotal/day</th>
            </tr></thead><tbody>${rows}</tbody>
        </table>
        <div class="flex justify-between items-center pt-4 border-t border-gray-200 dark:border-gray-600">
            <span class="text-gray-500 dark:text-gray-400 text-sm">Estimated Total (${days} day${days>1?'s':''})</span>
            <span class="text-2xl font-bold text-purple-600 dark:text-purple-400">₦${(daily*days).toLocaleString()}</span>
        </div>`;
}

function qbSendWhatsApp() {
    const name = document.getElementById('qb-name').value.trim();
    const phone = document.getElementById('qb-phone').value.trim();
    const loc = document.getElementById('qb-location').value.trim();
    const days = parseInt(document.getElementById('qb-days').value) || 1;
    const el = document.getElementById('qb-review-content');
    const ref = el.dataset.ref || generateRef();
    const dateStr = el.dataset.date || document.getElementById('qb-date').value;
    const ids = Object.keys(qbItems);
    let daily = 0;
    let msg = `Hello Richy Events Lagos,\n\nI would like to request a quote for my upcoming event.\n\n`;
    msg += `━━━━━━━━━━━━━━━━━━\nEVENT DETAILS\n━━━━━━━━━━━━━━━━━━\n\n`;
    msg += `Name: ${name}\nPhone: ${phone}\nEvent Date: ${dateStr}\nLocation: ${loc}\nDuration: ${days} day${days>1?'s':''}\nQuote Ref: ${ref}\n\n`;
    msg += `━━━━━━━━━━━━━━━━━━\nEQUIPMENT REQUESTED\n━━━━━━━━━━━━━━━━━━\n\n`;
    ids.forEach(id => {
        const item = qbItems[id]; const sub = item.price * item.qty; daily += sub;
        msg += `• ${item.name} × ${item.qty} — ₦${sub.toLocaleString()}/day\n`;
    });
    msg += `\n━━━━━━━━━━━━━━━━━━\nESTIMATED VALUE\n━━━━━━━━━━━━━━━━━━\n\n`;
    msg += `Estimated Total: ₦${(daily*days).toLocaleString()}\nFinal pricing will be confirmed by Richy Events Lagos.\n\n`;
    msg += `Please include delivery and setup charges in your response.\n\nThank you.`;
    window.open(`https://wa.me/2348106812381?text=${encodeURIComponent(msg)}`, '_blank');
}

// Floating cart
let quoteCart = JSON.parse(localStorage.getItem('quoteCart')) || [];
function addToQuote(name, price, id, stock) {
    const existing = quoteCart.find(i => i.id === id);
    if (existing) { existing.quantity = Math.min(existing.quantity + 1, stock); }
    else { quoteCart.push({ id, name, price, quantity: 1, stock }); }
    localStorage.setItem('quoteCart', JSON.stringify(quoteCart));
    updateCartUI();
    showNotification(`${name} added to quote!`);
}
function removeFromQuote(id) {
    quoteCart = quoteCart.filter(i => i.id !== id);
    localStorage.setItem('quoteCart', JSON.stringify(quoteCart));
    updateCartUI();
}
function clearCart() {
    if (!quoteCart.length) return;
    if (confirm('Clear all items from cart?')) {
        quoteCart = []; localStorage.setItem('quoteCart', JSON.stringify(quoteCart));
        updateCartUI(); showNotification('Cart cleared!');
    }
}
function updateQuantity(id, change) {
    const item = quoteCart.find(i => i.id === id);
    if (item) { item.quantity = Math.max(1, Math.min(item.quantity + change, item.stock || 9999)); localStorage.setItem('quoteCart', JSON.stringify(quoteCart)); updateCartUI(); }
}
function updateCartUI() {
    const badge = document.getElementById('cart-badge');
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    const count = quoteCart.reduce((s,i) => s + i.quantity, 0);
    if (count > 0) { badge.textContent = count; badge.classList.remove('hidden'); } else { badge.classList.add('hidden'); }
    if (!quoteCart.length) { cartItems.innerHTML = '<p class="text-gray-500 dark:text-gray-400 text-center py-8">No items added yet</p>'; cartTotal.textContent = '₦0'; return; }
    let total = 0;
    cartItems.innerHTML = quoteCart.map(item => {
        const sub = item.price * item.quantity; total += sub;
        return `<div class="flex items-center gap-3 mb-3 p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
            <div class="flex-1"><div class="font-semibold text-gray-800 dark:text-white text-sm">${item.name}</div>
            <div class="text-purple-600 dark:text-purple-400 font-bold text-sm">₦${item.price.toLocaleString()}/day</div></div>
            <div class="flex items-center gap-1">
                <button onclick="updateQuantity(${item.id},-1)" class="w-7 h-7 bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 rounded-full flex items-center justify-center text-lg font-bold">−</button>
                <span class="w-8 text-center font-bold text-gray-800 dark:text-white">${item.quantity}</span>
                <button onclick="updateQuantity(${item.id},1)" class="w-7 h-7 bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 rounded-full flex items-center justify-center text-lg font-bold">+</button>
            </div>
            <button onclick="removeFromQuote(${item.id})" class="text-red-500 hover:text-red-700 text-lg font-bold">×</button></div>`;
    }).join('');
    cartTotal.textContent = `₦${total.toLocaleString()}`;
}
function toggleQuoteCart() { document.getElementById('quote-cart').classList.toggle('hidden'); }
function sendQuoteToWhatsApp() {
    if (!quoteCart.length) { alert('Please add items to your quote first'); return; }
    quoteCart.forEach(cartItem => {
        const card = document.querySelector(`.qb-item-card[data-id="${cartItem.id}"]`);
        if (card && !qbItems[cartItem.id]) {
            qbToggleItem(card);
            qbItems[cartItem.id].qty = cartItem.quantity;
            card.querySelector('.qb-qty').textContent = cartItem.quantity;
            qbUpdateSummary();
        }
    });
    document.getElementById('quick-quote').scrollIntoView({ behavior: 'smooth' });
    showNotification('Items loaded into Quote Builder!');
}
function showNotification(text) {
    const n = document.createElement('div');
    n.className = 'fixed top-6 right-6 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
    n.textContent = text; document.body.appendChild(n);
    setTimeout(() => { n.style.opacity='0'; n.style.transition='opacity 0.3s'; setTimeout(()=>n.remove(),300); }, 2000);
}
document.addEventListener('DOMContentLoaded', updateCartUI);
</script>

<!-- Floating Cart Widget -->
<div id="quote-widget" class="fixed bottom-24 right-6 z-40">
    <button onclick="toggleQuoteCart()" class="relative bg-gradient-to-r from-purple-500 to-pink-600 text-white rounded-full p-4 shadow-2xl hover:scale-110 transition-all duration-300">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
        <span id="cart-badge" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-6 h-6 flex items-center justify-center hidden animate-bounce">0</span>
    </button>
    <div id="quote-cart" class="hidden absolute bottom-20 right-0 w-96 max-h-[600px] bg-white dark:bg-gray-800 rounded-2xl shadow-2xl overflow-hidden border-2 border-purple-200 dark:border-purple-700">
        <div class="bg-gradient-to-r from-purple-600 to-pink-600 text-white p-4 flex justify-between items-center">
            <h3 class="text-xl font-bold">Quick Quote</h3>
            <button onclick="toggleQuoteCart()" class="hover:bg-white/20 rounded-full p-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
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
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/></svg>
                Load into Quote Builder
            </button>
            <button onclick="clearCart()" class="w-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white py-2 rounded-xl font-semibold transition text-sm">Clear Cart</button>
        </div>
    </div>
</div>



<div id="about" class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-12 text-gray-800 dark:text-white">Why Choose Richy Events Lagos?</h2>
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="bg-white dark:bg-gray-800 p-10 rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 border border-gray-100 dark:border-gray-700">
                <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">Premium Quality</h3>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Top-tier equipment maintained to perfection for your special moments</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-10 rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 border border-gray-100 dark:border-gray-700">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">Lagos Island Coverage</h3>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Serving Victoria Island, Ikoyi, Lekki, and all of Lagos Island</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-10 rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 border border-gray-100 dark:border-gray-700">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">Fast Response</h3>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Quick setup, timely delivery, and professional service every time</p>
            </div>
        </div>
        <div class="mt-16">
            <a href="https://wa.me/2348106812381?text=Hello%20Richy%20Events!%20I'd%20like%20to%20discuss%20my%20event%20requirements" target="_blank" class="inline-block bg-gradient-to-r from-green-500 to-green-600 text-white px-12 py-4 rounded-full font-bold text-xl hover:from-green-600 hover:to-green-700 transform hover:scale-105 transition-all duration-300 shadow-xl">
                Chat with Us on WhatsApp
            </a>
        </div>
    </div>
</div>
@endsection
