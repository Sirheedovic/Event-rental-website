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
            <a href="#quick-quote" class="inline-block bg-gradient-to-r from-green-500 to-green-600 text-white px-8 py-4 rounded-full font-bold text-lg hover:from-green-600 hover:to-green-700 hover:scale-105 transform transition duration-300 shadow-xl">Quick Quote</a>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const items = [
        ['hero-eyebrow', 200],
        ['hero-title',   400],
        ['hero-subtitle',600],
        ['hero-buttons', 800],
        ['hero-trust',  1050],
    ];
    items.forEach(([id]) => {
        const el = document.getElementById(id);
        if (el) { el.style.opacity = '0'; el.style.transform = 'translateY(30px)'; }
    });
    items.forEach(([id, delay]) => {
        const el = document.getElementById(id);
        if (!el) return;
        setTimeout(() => {
            el.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
        }, delay);
    });
});
</script>

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
                            @php $dirs = ['left','up','right']; $dir = $dirs[$loop->index % 3]; @endphp
                            <div class="flex-none snap-start">
                                <div class="card-animate bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 group border border-gray-100 dark:border-gray-700 h-full" data-dir="{{ $dir }}">
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
                        @php $dirs = ['left','up','right']; $dir = $dirs[$loop->index % 3]; @endphp
                        <div class="card-animate bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 group border border-gray-100 dark:border-gray-700" data-dir="{{ $dir }}">
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
(function(){
    const dirMap = { left: 'translateX(-70px)', right: 'translateX(70px)', up: 'translateY(70px)' };
    function initCards() {
        document.querySelectorAll('.card-animate').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = dirMap[el.dataset.dir] || 'translateY(70px)';
        });
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translate(0,0)';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.card-animate').forEach(el => observer.observe(el));
    }
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', initCards);
    else initCards();
})();
</script>

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

        <div class="relative" id="gallery-slider-wrap">
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

            <button onclick="sliderMove(-1)" class="absolute left-3 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/70 text-white rounded-full p-3 transition z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button onclick="sliderMove(1)" class="absolute right-3 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/70 text-white rounded-full p-3 transition z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>

            <div id="gallery-dots" class="flex justify-center gap-2 mt-5"></div>
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

    buildDots();
    goTo(0);
    resetAuto();

    const track = document.getElementById('gallery-track');
    let touchStartX = 0;
    track.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
    track.addEventListener('touchend', e => {
        const diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 50) { resetAuto(); goTo(current + (diff > 0 ? 1 : -1)); }
    });
})();
</script>

<div id="quick-quote" class="bg-gray-50 dark:bg-gray-900 py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 dark:text-white mb-4">Quick Quote Request</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">3 easy steps to get your instant WhatsApp quote</p>
        </div>

                <div class="max-w-6xl mx-auto bg-white dark:bg-gray-800 rounded-2xl shadow-xl border border-gray-200 dark:border-gray-700 overflow-hidden">

            <!-- Step Header -->
            <div class="bg-gradient-to-r from-purple-600 to-pink-600 px-8 py-6">
                <div class="flex items-center justify-between max-w-sm mx-auto">
                    <div class="flex flex-col items-center">
                        <div id="step-dot-1" class="w-10 h-10 rounded-full flex items-center justify-center font-bold bg-white text-purple-600 shadow transition-all duration-300">1</div>
                        <span class="text-xs mt-2 font-semibold text-white">Equipment</span>
                    </div>
                    <div class="flex-1 mx-3 h-1 bg-white/30 rounded overflow-hidden">
                        <div id="step-line-1" class="h-full bg-white rounded transition-all duration-500" style="width:0%"></div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div id="step-dot-2" class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-white bg-white/30 shadow transition-all duration-300">2</div>
                        <span class="text-xs mt-2 font-semibold text-white/60" id="step-label-2">Extras</span>
                    </div>
                    <div class="flex-1 mx-3 h-1 bg-white/30 rounded overflow-hidden">
                        <div id="step-line-2" class="h-full bg-white rounded transition-all duration-500" style="width:0%"></div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div id="step-dot-3" class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-white bg-white/30 shadow transition-all duration-300">3</div>
                        <span class="text-xs mt-2 font-semibold text-white/60" id="step-label-3">Your Details</span>
                    </div>
                </div>
            </div>

            <form id="quote-form">
                <!-- STEP 1: Select Equipment -->
                <div id="quote-step-1" class="quote-step p-8">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-white">Select Equipment</h3>
                        <button type="button" onclick="loadCartToForm()" class="inline-flex items-center gap-2 bg-purple-100 dark:bg-purple-900 hover:bg-purple-200 text-purple-700 dark:text-purple-300 px-4 py-2 rounded-lg font-semibold text-sm transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                            Load from Cart
                        </button>
                    </div>
                    <div class="grid grid-cols-2 lg:grid-cols-2 gap-3">
                        @foreach($equipment as $category => $items)
                            <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-5 border border-gray-200 dark:border-gray-600">
                                <h4 class="text-xl font-bold mb-4 capitalize text-purple-600 dark:text-purple-400">{{ $category }}</h4>
                                @foreach($items as $item)
                                    <div class="flex items-center mb-3 p-3 rounded-lg hover:bg-white dark:hover:bg-gray-600 transition-all">
                                        <input type="checkbox" class="w-5 h-5 text-purple-600 rounded border-gray-300 focus:ring-purple-500" data-name="{{ $item->name }}" data-price="{{ $item->price_per_day }}" onchange="toggleQuantity(this)">
                                        <div class="w-10 h-10 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center ml-3 mr-3">
                                            @php
                                                $itemName = strtolower($item->name);
                                                if (str_contains($itemName, 'chair')) {
                                                    $icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>';
                                                } elseif (str_contains($itemName, 'table')) {
                                                    $icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>';
                                                } elseif (str_contains($itemName, 'canopy') || str_contains($itemName, 'tent')) {
                                                    $icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v9a1 1 0 001 1h4v-5h4v5h4a1 1 0 001-1v-9"></path>';
                                                } elseif (str_contains($itemName, 'floor') || str_contains($itemName, 'dance')) {
                                                    $icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>';
                                                } elseif (str_contains($itemName, 'sound') || str_contains($itemName, 'audio')) {
                                                    $icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M9 5H7a2 2 0 00-2 2v6a2 2 0 002 2h2l3.5 4V1L9 5z"></path>';
                                                } else {
                                                    $icon = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>';
                                                }
                                            @endphp
                                            <svg class="w-5 h-5 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $icon !!}</svg>
                                        </div>
                                        <div class="flex-1">
                                            <div class="font-semibold text-gray-800 dark:text-white text-sm">{{ $item->name }}</div>
                                            <div class="text-purple-600 dark:text-purple-400 font-bold text-sm">₦{{ number_format($item->price_per_day, 0) }}<span class="text-xs text-gray-500 dark:text-gray-400">/day</span></div>
                                        </div>
                                        <input type="number" min="1" value="1" class="w-16 p-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg text-center text-sm focus:border-purple-500 focus:ring-1 focus:ring-purple-500 disabled:bg-gray-100 dark:disabled:bg-gray-800 disabled:text-gray-400" oninput="updatePreview()" disabled data-qty>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <div class="flex justify-end mt-8">
                        <button type="button" onclick="goToStep(2)" class="bg-gradient-to-r from-purple-600 to-pink-600 text-white px-8 py-3 rounded-xl font-bold hover:from-purple-700 hover:to-pink-700 transition shadow-lg flex items-center gap-2">
                            Next: Add Extras
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>

                <!-- STEP 2: Additional Items -->
                <div id="quote-step-2" class="quote-step p-8 hidden">
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Additional Items</h3>
                    <div class="flex flex-col lg:flex-row gap-6">
                    <div class="flex-1">
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-5 border border-gray-200 dark:border-gray-600">
                        <div id="custom-items">
                            <div class="flex gap-3">
                                <input type="text" placeholder="Item name" class="flex-1 p-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                                <input type="number" placeholder="Qty" min="1" class="w-20 p-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-lg text-center focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                                <button type="button" onclick="addCustomItem()" class="bg-green-600 hover:bg-green-700 text-white px-4 rounded-lg transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    </div><!-- end flex-1 -->
                    <!-- Preview Panel -->
                    <div class="lg:w-72 shrink-0">
                        <div class="bg-purple-50 dark:bg-gray-700 rounded-xl border border-purple-200 dark:border-purple-700 p-5 sticky top-4">
                            <h4 class="font-bold text-purple-700 dark:text-purple-300 mb-3 text-sm uppercase tracking-wide">Selected Items</h4>
                            <div id="preview-list-2" class="space-y-2 mb-4 max-h-60 overflow-y-auto">
                                <p class="text-gray-400 dark:text-gray-500 text-sm text-center py-4">No items selected yet</p>
                            </div>
                            <div class="border-t border-purple-200 dark:border-purple-600 pt-3 flex justify-between items-center">
                                <span class="font-bold text-gray-700 dark:text-gray-200 text-sm">Daily Total</span>
                                <span id="preview-total-2" class="text-xl font-bold text-purple-600 dark:text-purple-400">₦0</span>
                            </div>
                        </div>
                    </div>
                    </div><!-- end flex row -->
                    <div class="flex justify-between mt-8">
                        <button type="button" onclick="goToStep(1)" class="bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white px-8 py-3 rounded-xl font-bold transition flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                            Back
                        </button>
                        <button type="button" onclick="goToStep(3)" class="bg-gradient-to-r from-purple-600 to-pink-600 text-white px-8 py-3 rounded-xl font-bold hover:from-purple-700 hover:to-pink-700 transition shadow-lg flex items-center gap-2">
                            Next: Your Details
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>

                <!-- STEP 3: Your Details -->
                <div id="quote-step-3" class="quote-step p-8 hidden">
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Your Details</h3>
                    <div class="flex flex-col lg:flex-row gap-6">
                    <div class="flex-1">
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-5 border border-gray-200 dark:border-gray-600">
                        <div class="grid md:grid-cols-2 gap-4">
                            <input type="text" id="customer-name" placeholder="Your Full Name" required class="w-full p-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                            <input type="tel" id="customer-phone" placeholder="Phone Number" class="w-full p-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                            <input type="date" id="event-date" required class="w-full p-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                            <input type="number" id="event-days" oninput="updatePreview()" placeholder="Number of days" min="1" value="1" required class="w-full p-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white rounded-lg focus:border-purple-500 focus:ring-1 focus:ring-purple-500">
                        </div>
                    </div>
                    </div><!-- end flex-1 -->
                    <!-- Preview Panel -->
                    <div class="lg:w-72 shrink-0">
                        <div class="bg-purple-50 dark:bg-gray-700 rounded-xl border border-purple-200 dark:border-purple-700 p-5 sticky top-4">
                            <h4 class="font-bold text-purple-700 dark:text-purple-300 mb-3 text-sm uppercase tracking-wide">Order Summary</h4>
                            <div id="preview-list-3" class="space-y-2 mb-4 max-h-60 overflow-y-auto">
                                <p class="text-gray-400 dark:text-gray-500 text-sm text-center py-4">No items selected yet</p>
                            </div>
                            <div class="border-t border-purple-200 dark:border-purple-600 pt-3 space-y-1">
                                <div class="flex justify-between items-center text-sm text-gray-600 dark:text-gray-300">
                                    <span>Per day</span>
                                    <span id="preview-perday-3" class="font-semibold">₦0</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-bold text-gray-700 dark:text-gray-200 text-sm">Est. Total</span>
                                    <span id="preview-total-3" class="text-xl font-bold text-purple-600 dark:text-purple-400">₦0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div><!-- end flex row -->
                    <div class="flex justify-between mt-8">
                        <button type="button" onclick="goToStep(2)" class="bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white px-8 py-3 rounded-xl font-bold transition flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                            Back
                        </button>
                        <button type="button" onclick="sendToWhatsApp()" class="inline-flex items-center gap-2 px-8 py-3 text-lg font-bold text-white bg-green-600 hover:bg-green-700 rounded-xl transition shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/></svg>
                            Send to WhatsApp
                        </button>
                    </div>
                </div>
            </form>
        </div><!-- end card -->
    </div><!-- end container -->
</div><!-- end quick-quote -->

<script>
function goToStep(n) {
    [1,2,3].forEach(i => {
        document.getElementById('quote-step-'+i).classList.toggle('hidden', i !== n);
        const dot = document.getElementById('step-dot-'+i);
        const label = document.getElementById('step-label-'+i);
        if (i < n) {
            dot.className = 'w-10 h-10 rounded-full flex items-center justify-center font-bold bg-white text-green-600 shadow transition-all duration-300';
            dot.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>';
        } else if (i === n) {
            dot.className = 'w-10 h-10 rounded-full flex items-center justify-center font-bold bg-white text-purple-600 shadow transition-all duration-300';
            dot.innerHTML = i;
            if (label) label.className = 'text-xs mt-2 font-semibold text-white';
        } else {
            dot.className = 'w-10 h-10 rounded-full flex items-center justify-center font-bold text-white bg-white/30 shadow transition-all duration-300';
            dot.innerHTML = i;
            if (label) label.className = 'text-xs mt-2 font-semibold text-white/60';
        }
    });
    const l1 = document.getElementById('step-line-1');
    const l2 = document.getElementById('step-line-2');
    if (l1) l1.style.width = n > 1 ? '100%' : '0%';
    if (l2) l2.style.width = n > 2 ? '100%' : '0%';
}

function toggleQuantity(checkbox) {
    const qtyInput = checkbox.parentElement.querySelector('[data-qty]');
    qtyInput.disabled = !checkbox.checked;
    if (!checkbox.checked) qtyInput.value = 1;
    updatePreview();
}

function updatePreview() {
    const items = [];
    let total = 0;
    document.querySelectorAll('#quote-form input[type="checkbox"]:checked').forEach(cb => {
        const qty = parseInt(cb.parentElement.querySelector('[data-qty]').value) || 1;
        const price = parseFloat(cb.dataset.price) || 0;
        const sub = price * qty;
        total += sub;
        items.push({ name: cb.dataset.name, qty, price, sub });
    });
    const days = parseInt(document.getElementById('event-days')?.value) || 1;
    const emptyHtml = '<p class="text-gray-400 dark:text-gray-500 text-sm text-center py-4">No items selected yet</p>';
    const listHtml = items.length ? items.map(i =>
        `<div class="flex justify-between items-start text-sm">
            <span class="text-gray-700 dark:text-gray-200 flex-1 pr-2">${i.name} <span class="text-gray-400">x${i.qty}</span></span>
            <span class="font-semibold text-purple-600 dark:text-purple-400 shrink-0">₦${i.sub.toLocaleString()}</span>
        </div>`
    ).join('') : emptyHtml;
    ['2','3'].forEach(n => {
        const el = document.getElementById('preview-list-'+n);
        if (el) el.innerHTML = listHtml;
        const tot = document.getElementById('preview-total-'+n);
        if (tot) tot.textContent = '₦' + total.toLocaleString();
    });
    const perday = document.getElementById('preview-perday-3');
    if (perday) perday.textContent = '₦' + total.toLocaleString();
    const tot3 = document.getElementById('preview-total-3');
    if (tot3) tot3.textContent = '₦' + (total * days).toLocaleString();
}

function addCustomItem() {
    const container = document.getElementById('custom-items');
    const inputs = container.querySelectorAll('input');
    const itemName = inputs[0].value.trim();
    const quantity = inputs[1].value.trim() || 1;
    if (itemName) {
        const customDiv = document.createElement('div');
        customDiv.className = 'flex items-center gap-3 mb-2 p-2 bg-gray-100 dark:bg-gray-600 rounded-lg';
        customDiv.innerHTML = `<span class="flex-1 text-gray-800 dark:text-white">${itemName} (Qty: ${quantity})</span>
            <input type="hidden" name="custom[]" value="${itemName}|${quantity}">
            <button type="button" onclick="this.parentElement.remove()" class="text-red-500 hover:text-red-700">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>`;
        container.appendChild(customDiv);
        inputs[0].value = ''; inputs[1].value = '';
    }
}

function sendToWhatsApp() {
    const form = document.getElementById('quote-form');
    const selectedEquipment = [];
    const customItems = [];
    let total = 0;

    form.querySelectorAll('input[type="checkbox"]:checked').forEach(checkbox => {
        if (checkbox.dataset.name) {
            const name = checkbox.dataset.name;
            const price = parseInt(checkbox.dataset.price);
            const qty = parseInt(checkbox.parentElement.querySelector('[data-qty]').value) || 1;
            const itemTotal = price * qty;
            selectedEquipment.push(`${name} x${qty} - ₦${price.toLocaleString()}/day each = ₦${itemTotal.toLocaleString()}/day`);
            total += itemTotal;
        }
    });

    form.querySelectorAll('input[name="custom[]"]').forEach(input => {
        const [name, qty] = input.value.split('|');
        customItems.push(`${name} x${qty}`);
    });

    const customerName = document.getElementById('customer-name').value;
    const customerPhone = document.getElementById('customer-phone').value;
    const eventDate = document.getElementById('event-date').value;
    const eventDays = document.getElementById('event-days').value || 1;

    if (selectedEquipment.length === 0 && customItems.length === 0) { alert('Please select at least one item'); return; }
    if (!customerName || !eventDate) { alert('Please fill in your name and event date'); return; }

    const totalCost = total * parseInt(eventDays);
    let message = `🎉 *QUOTE REQUEST - Richy Events Lagos*\n\n`;
    message += `👤 *Customer:* ${customerName}\n`;
    if (customerPhone) message += `📱 *Phone:* ${customerPhone}\n`;
    message += `📅 *Event Date:* ${eventDate}\n`;
    message += `⏰ *Duration:* ${eventDays} day(s)\n\n`;
    if (selectedEquipment.length > 0) {
        message += `📋 *SELECTED EQUIPMENT:*\n`;
        selectedEquipment.forEach(item => { message += `• ${item}\n`; });
        message += `\n`;
    }
    if (customItems.length > 0) {
        message += `➕ *ADDITIONAL ITEMS:*\n`;
        customItems.forEach(item => { message += `• ${item}\n`; });
        message += `\n`;
    }
    if (total > 0) message += `💰 *Estimated Total:* ₦${totalCost.toLocaleString()} (${eventDays} day(s))\n\n`;
    message += `Please prepare detailed invoice with availability confirmation. Thank you! 🙏`;

    window.open(`https://wa.me/2348106812381?text=${encodeURIComponent(message)}`, '_blank');
}
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
                Send to WhatsApp
            </button>
            <button onclick="clearCart()" class="w-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white py-2 rounded-xl font-semibold transition text-sm">Clear Cart</button>
        </div>
    </div>
</div>

<script>
let quoteCart = JSON.parse(localStorage.getItem('quoteCart')) || [];

function addToQuote(name, price, id, stock) {
    const existing = quoteCart.find(i => i.id === id);
    if (existing) { existing.quantity = Math.min(existing.quantity + 1, stock || 9999); }
    else { quoteCart.push({ id, name, price, quantity: 1, stock: stock || 9999 }); }
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
    const count = quoteCart.reduce((s, i) => s + i.quantity, 0);
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
    let message = '🎉 *QUICK QUOTE REQUEST - Richy Events Lagos*\n\n📋 *SELECTED EQUIPMENT:*\n';
    let total = 0;
    quoteCart.forEach(item => {
        const itemTotal = item.price * item.quantity; total += itemTotal;
        message += `• ${item.name} x${item.quantity} - ₦${item.price.toLocaleString()}/day = ₦${itemTotal.toLocaleString()}/day\n`;
    });
    message += `\n💰 *Daily Total:* ₦${total.toLocaleString()}\n\nPlease provide availability and final quote. Thank you! 🙏`;
    window.open(`https://wa.me/2348106812381?text=${encodeURIComponent(message)}`, '_blank');
}

function showNotification(text) {
    const n = document.createElement('div');
    n.className = 'fixed top-6 right-6 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
    n.textContent = text; document.body.appendChild(n);
    setTimeout(() => { n.style.opacity='0'; n.style.transition='opacity 0.3s'; setTimeout(()=>n.remove(),300); }, 2000);
}

function loadCartToForm() {
    if (!quoteCart.length) { alert('Your cart is empty. Add items first!'); return; }
    document.querySelectorAll('#quote-form input[type="checkbox"]').forEach(cb => { cb.checked = false; toggleQuantity(cb); });
    quoteCart.forEach(cartItem => {
        const checkbox = document.querySelector(`#quote-form input[data-name="${cartItem.name}"]`);
        if (checkbox) {
            checkbox.checked = true; toggleQuantity(checkbox);
            const qtyInput = checkbox.parentElement.querySelector('[data-qty]');
            if (qtyInput) qtyInput.value = cartItem.quantity;
        }
    });
    document.getElementById('quick-quote').scrollIntoView({ behavior: 'smooth' });
    showNotification('Cart items loaded to form!');
}

document.addEventListener('DOMContentLoaded', updateCartUI);
</script>

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
