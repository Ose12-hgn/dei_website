<!-- HOME PAGE HERO SECTION -->
<div class="bg-gradient-to-b from-orange-50 to-white px-6 py-16 md:py-24">
    <div class="mx-auto max-w-6xl">
        <div class="grid grid-cols-1 items-center gap-8 md:grid-cols-2">
            <!-- Left Content -->
            <div>
                <h1 class="text-4xl font-bold text-gray-900 md:text-5xl">
                    Find <span class="text-orange-500">Affordable</span> Food Near You
                </h1>
                <p class="mt-4 text-lg text-gray-600">
                    A culinary guide helping migrants and travelers discover authentic local flavors without breaking the bank. Your digital kitchen table awaits.
                </p>
                
                <!-- Search & Filter Section -->
                <div class="mt-8 flex flex-col gap-4 md:flex-row md:items-center">
                    <div class="flex items-center gap-2">
                        <svg class="h-5 w-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"></path>
                        </svg>
                        <span class="text-sm text-gray-700">Where are you</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="h-5 w-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-sm text-gray-700">Budget $</span>
                    </div>
                    <button class="rounded-full bg-orange-500 px-6 py-2 text-white font-semibold hover:bg-orange-600 transition">
                        Search
                    </button>
                </div>
            </div>

            <!-- Right Images -->
            <div class="grid grid-cols-2 gap-4">
                <!-- IMAGE PLACEHOLDER 1: Replace with: {{ asset('images/hero-food-1.jpg') }} -->
                <div class="rounded-2xl bg-gray-200 h-64 overflow-hidden">
                    <img src="[ADD_IMAGE_PATH_HERE: resources/images/hero-food-1.jpg]" alt="Food" class="w-full h-full object-cover">
                </div>
                <!-- IMAGE PLACEHOLDER 2: Replace with: {{ asset('images/hero-food-2.jpg') }} -->
                <div class="rounded-2xl bg-gray-200 h-64 overflow-hidden flex items-center justify-center">
                    <img src="[ADD_IMAGE_PATH_HERE: resources/images/hero-food-2.jpg]" alt="Food" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CURATED RECOMMENDATIONS SECTION -->
<div class="bg-white px-6 py-16 md:py-20">
    <div class="mx-auto max-w-6xl">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-3xl font-bold text-gray-900">Curated Recommendations</h2>
                <p class="mt-2 text-gray-600">Carefully picked spots known for exceptional quality and integrity based on your preferences</p>
            </div>
            <a href="#" class="text-orange-500 font-semibold hover:text-orange-600">View all →</a>
        </div>

        <!-- Recommendation Cards -->
        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-3">
            <!-- Card 1 -->
            <div class="rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition">
                <!-- IMAGE PLACEHOLDER 3: Replace with: {{ asset('images/saigon-street-eats.jpg') }} -->
                <div class="h-48 bg-gray-300 overflow-hidden">
                    <img src="[ADD_IMAGE_PATH_HERE: resources/images/saigon-street-eats.jpg]" alt="Saigon Street Eats" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Saigon Street Eats</h3>
                        <span class="text-orange-500 font-bold">$7.50</span>
                    </div>
                    <p class="mt-2 text-sm text-gray-600">Authentic Vietnamese pho and spring rolls in a humble spot. Lively, generous portions, Known for..." </p>
                    <div class="mt-4 flex gap-2">
                        <button class="flex-1 rounded-full border border-orange-500 px-4 py-2 text-orange-500 text-sm font-semibold hover:bg-orange-50 transition">
                            Unrelated
                        </button>
                        <button class="flex-1 rounded-full border border-orange-500 px-4 py-2 text-orange-500 text-sm font-semibold hover:bg-orange-50 transition">
                            Relevant
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition">
                <!-- IMAGE PLACEHOLDER 4: Replace with: {{ asset('images/aleyanna-house.jpg') }} -->
                <div class="h-48 bg-gray-300 overflow-hidden">
                    <img src="[ADD_IMAGE_PATH_HERE: resources/images/aleyanna-house.jpg]" alt="Aleyanna House" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Aleyanna House</h3>
                        <span class="text-orange-500 font-bold">$12.00</span>
                    </div>
                    <p class="mt-2 text-sm text-gray-600">Ethiopian cuisine in a welcoming environment. hand-stretched injera and slow-simmered sauces and recipes...</p>
                    <div class="mt-4 flex gap-2">
                        <button class="flex-1 rounded-full border border-orange-500 px-4 py-2 text-orange-500 text-sm font-semibold hover:bg-orange-50 transition">
                            Unrelated
                        </button>
                        <button class="flex-1 rounded-full border border-orange-500 px-4 py-2 text-orange-500 text-sm font-semibold hover:bg-orange-50 transition">
                            Relevant
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="rounded-lg overflow-hidden border border-gray-200 hover:shadow-lg transition">
                <!-- IMAGE PLACEHOLDER 5: Replace with: {{ asset('images/patagons-pantry.jpg') }} -->
                <div class="h-48 bg-gray-300 overflow-hidden">
                    <img src="[ADD_IMAGE_PATH_HERE: resources/images/patagons-pantry.jpg]" alt="Patagons Pantry" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Patagons Pantry</h3>
                        <span class="text-orange-500 font-bold">$4.00</span>
                    </div>
                    <p class="mt-2 text-sm text-gray-600">Cozy spot for traditional Latin fare with authentic flavors. Try their empanadas for a quick bite or a full meal.</p>
                    <div class="mt-4 flex gap-2">
                        <button class="flex-1 rounded-full border border-orange-500 px-4 py-2 text-orange-500 text-sm font-semibold hover:bg-orange-50 transition">
                            Unrelated
                        </button>
                        <button class="flex-1 rounded-full border border-orange-500 px-4 py-2 text-orange-500 text-sm font-semibold hover:bg-orange-50 transition">
                            Relevant
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- THE SIMPLE PATH TO FLAVOR SECTION -->
<div class="bg-white px-6 py-16 md:py-20">
    <div class="mx-auto max-w-6xl">
        <h2 class="text-center text-3xl font-bold text-gray-900">The Simple Path to Flavor</h2>
        
        <div class="mt-16 grid grid-cols-1 gap-8 md:grid-cols-3">
            <!-- Find Step -->
            <div class="text-center">
                <div class="mx-auto mb-4 h-16 w-16 rounded-full bg-orange-100 flex items-center justify-center">
                    <svg class="h-8 w-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Find</h3>
                <p class="mt-2 text-gray-600">Search for locations to see what's cooking nearby in your neighborhood</p>
            </div>

            <!-- Filter Step -->
            <div class="text-center">
                <div class="mx-auto mb-4 h-16 w-16 rounded-full bg-orange-100 flex items-center justify-center">
                    <svg class="h-8 w-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Filter</h3>
                <p class="mt-2 text-gray-600">Adjust your budget and cuisine preferences to find the perfect match</p>
            </div>

            <!-- Feast Step -->
            <div class="text-center">
                <div class="mx-auto mb-4 h-16 w-16 rounded-full bg-orange-100 flex items-center justify-center">
                    <svg class="h-8 w-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Feast</h3>
                <p class="mt-2 text-gray-600">Savor the flavors and enjoy a high-quality, affordable meal</p>
            </div>
        </div>
    </div>
</div>

<!-- TRENDING TASTES SECTION -->
<div class="bg-white px-6 py-16 md:py-20">
    <div class="mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-gray-900">Trending Tastes</h2>
        
        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-4">
            <!-- Trending Item 1 -->
            <div class="group cursor-pointer">
                <!-- IMAGE PLACEHOLDER 6: Replace with: {{ asset('images/giant-indian-thali.jpg') }} -->
                <div class="h-48 rounded-lg bg-gray-300 overflow-hidden mb-4">
                    <img src="[ADD_IMAGE_PATH_HERE: resources/images/giant-indian-thali.jpg]" alt="Giant Indian Thali" class="w-full h-full object-cover group-hover:scale-105 transition">
                </div>
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-gray-900">Giant Indian Thali</h3>
                    <span class="text-xs bg-orange-100 text-orange-700 px-2 py-1 rounded">Top Menu</span>
                </div>
                <p class="mt-1 text-sm text-gray-600">from $9.99</p>
            </div>

            <!-- Trending Item 2 -->
            <div class="group cursor-pointer">
                <!-- IMAGE PLACEHOLDER 7: Replace with: {{ asset('images/crispy-soy-garlic-chicken.jpg') }} -->
                <div class="h-48 rounded-lg bg-gray-300 overflow-hidden mb-4">
                    <img src="[ADD_IMAGE_PATH_HERE: resources/images/crispy-soy-garlic-chicken.jpg]" alt="Crispy Soy Garlic Chicken" class="w-full h-full object-cover group-hover:scale-105 transition">
                </div>
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-gray-900">Crispy Soy Garlic Chicken</h3>
                    <span class="text-xs bg-orange-100 text-orange-700 px-2 py-1 rounded">Must Try</span>
                </div>
                <p class="mt-1 text-sm text-gray-600">from $11.50</p>
            </div>

            <!-- Trending Item 3 -->
            <div class="group cursor-pointer">
                <!-- IMAGE PLACEHOLDER 8: Replace with: {{ asset('images/miso-tonkotsu-ramen.jpg') }} -->
                <div class="h-48 rounded-lg bg-gray-300 overflow-hidden mb-4">
                    <img src="[ADD_IMAGE_PATH_HERE: resources/images/miso-tonkotsu-ramen.jpg]" alt="Miso Tonkotsu Ramen" class="w-full h-full object-cover group-hover:scale-105 transition">
                </div>
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-gray-900">Miso Tonkotsu Ramen</h3>
                    <span class="text-xs bg-orange-100 text-orange-700 px-2 py-1 rounded">Popular</span>
                </div>
                <p class="mt-1 text-sm text-gray-600">from $13.00</p>
            </div>

            <!-- Trending Item 4 -->
            <div class="group cursor-pointer">
                <!-- IMAGE PLACEHOLDER 9: Replace with: {{ asset('images/classic-art-plate-bbq.jpg') }} -->
                <div class="h-48 rounded-lg bg-gray-300 overflow-hidden mb-4">
                    <img src="[ADD_IMAGE_PATH_HERE: resources/images/classic-art-plate-bbq.jpg]" alt="Classic Art Plate BBQ" class="w-full h-full object-cover group-hover:scale-105 transition">
                </div>
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-gray-900">Classic Art Plate BBQ</h3>
                    <span class="text-xs bg-orange-100 text-orange-700 px-2 py-1 rounded">Popular</span>
                </div>
                <p class="mt-1 text-sm text-gray-600">from $12.50</p>
            </div>
        </div>
    </div>
</div>

<!-- HIDDEN GEMS SECTION -->
<div class="bg-white px-6 py-16 md:py-20">
    <div class="mx-auto max-w-6xl">
        <h2 class="text-3xl font-bold text-gray-900">Hidden Gems</h2>
        
        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-3">
            <!-- Gem 1 - Large -->
            <div class="group cursor-pointer md:col-span-1 md:row-span-2">
                <!-- IMAGE PLACEHOLDER 10: Replace with: {{ asset('images/artisan-heart-bakery.jpg') }} -->
                <div class="h-full rounded-lg bg-gray-300 overflow-hidden mb-4">
                    <img src="[ADD_IMAGE_PATH_HERE: resources/images/artisan-heart-bakery.jpg]" alt="Artisan Heart Bakery" class="w-full h-full object-cover group-hover:scale-105 transition">
                </div>
                <div class="p-4 absolute bg-black/50 text-white bottom-0 left-0 right-0">
                    <h3 class="font-semibold">Artisan Heart Bakery</h3>
                    <p class="text-sm mt-1">Artisanal treats for delightful lunches that cost less than a coffee</p>
                </div>
            </div>

            <!-- Gem 2 -->
            <div class="group cursor-pointer">
                <!-- IMAGE PLACEHOLDER 11: Replace with: {{ asset('images/humbled-express.jpg') }} -->
                <div class="h-48 rounded-lg bg-gray-300 overflow-hidden mb-4">
                    <img src="[ADD_IMAGE_PATH_HERE: resources/images/humbled-express.jpg]" alt="Humbled Express" class="w-full h-full object-cover group-hover:scale-105 transition">
                </div>
                <div class="p-3">
                    <h3 class="font-semibold text-gray-900">Humbled Express</h3>
                    <p class="text-sm text-gray-600 mt-1">Fried rice this is so great. Very good</p>
                </div>
            </div>

            <!-- Gem 3 -->
            <div class="group cursor-pointer">
                <!-- IMAGE PLACEHOLDER 12: Replace with: {{ asset('images/classic-doer.jpg') }} -->
                <div class="h-48 rounded-lg bg-gray-300 overflow-hidden mb-4">
                    <img src="[ADD_IMAGE_PATH_HERE: resources/images/classic-doer.jpg]" alt="Classic Doer" class="w-full h-full object-cover group-hover:scale-105 transition">
                </div>
                <div class="p-3">
                    <h3 class="font-semibold text-gray-900">Classic Doer</h3>
                    <p class="text-sm text-gray-600 mt-1">Classic sandwiches and street food</p>
                </div>
            </div>

            <!-- Gem 4 -->
            <div class="group cursor-pointer">
                <!-- IMAGE PLACEHOLDER 13: Replace with: {{ asset('images/sweet-lab.jpg') }} -->
                <div class="h-48 rounded-lg bg-gray-300 overflow-hidden mb-4">
                    <img src="[ADD_IMAGE_PATH_HERE: resources/images/sweet-lab.jpg]" alt="Sweet Lab" class="w-full h-full object-cover group-hover:scale-105 transition">
                </div>
                <div class="p-3">
                    <h3 class="font-semibold text-gray-900">Sweet Lab</h3>
                    <p class="text-sm text-gray-600 mt-1">Macarons and pastries for sweet indulgence</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA SECTION -->
<div class="bg-gradient-to-r from-orange-400 to-orange-600 px-6 py-16 md:py-20">
    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold text-white md:text-4xl">Ready to Taste Your Next Adventure?</h2>
        <p class="mt-4 text-lg text-orange-50">Join 50,000+ travelers and migrants exploring the best local eats every day</p>
        
        <div class="mt-8 flex flex-col justify-center gap-4 sm:flex-row">
            <button class="rounded-full bg-white px-8 py-3 text-orange-600 font-semibold hover:bg-orange-50 transition">
                Sign Up Free
            </button>
            <button class="rounded-full border-2 border-white px-8 py-3 text-white font-semibold hover:bg-white/10 transition">
                Explore Map
            </button>
        </div>
    </div>
</div>

<!-- FOOTER SECTION -->
<footer class="bg-gray-900 px-6 py-12 text-gray-400">
    <div class="mx-auto max-w-6xl">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
            <!-- Brand -->
            <div>
                <h3 class="text-lg font-bold text-white">CulinaryMaster</h3>
                <p class="mt-2 text-sm">Discover authentic local food flavors for every budget.</p>
            </div>

            <!-- Explore Links -->
            <div>
                <h4 class="font-semibold text-white">Explore</h4>
                <ul class="mt-4 space-y-2">
                    <li><a href="#" class="hover:text-white transition">Top Eats</a></li>
                    <li><a href="#" class="hover:text-white transition">New Places</a></li>
                    <li><a href="#" class="hover:text-white transition">Budget Bites</a></li>
                </ul>
            </div>

            <!-- Resources Links -->
            <div>
                <h4 class="font-semibold text-white">Resources</h4>
                <ul class="mt-4 space-y-2">
                    <li><a href="#" class="hover:text-white transition">Travel Guide</a></li>
                    <li><a href="#" class="hover:text-white transition">Food Blog</a></li>
                    <li><a href="#" class="hover:text-white transition">FAQs</a></li>
                </ul>
            </div>

            <!-- Connect Links -->
            <div>
                <h4 class="font-semibold text-white">Connect</h4>
                <ul class="mt-4 space-y-2">
                    <li><a href="#" class="hover:text-white transition">Facebook</a></li>
                    <li><a href="#" class="hover:text-white transition">Instagram</a></li>
                    <li><a href="#" class="hover:text-white transition">Twitter</a></li>
                </ul>
            </div>
        </div>

        <div class="mt-8 border-t border-gray-800 pt-8 text-center text-sm">
            <p>&copy; 2026 CulinaryMaster. All rights reserved. | Privacy Policy | Terms of Service</p>
        </div>
    </div>

</footer> 