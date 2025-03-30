<!-- START OF NEWS SECTION -->
<div class="bg-white w-full">
    <section class="max-w-7xl mx-auto p-4">
        <h1 class="pt-2 pb-8 text-center text-5xl text-[#132080] font-extrabold shrikhand-regular">NEWS UPDATES</h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Featured Story -->
            @if($featuredNews)
            <div class="lg:col-span-2 relative min-h-[400px] bg-gray-100">
                @if(filter_var($featuredNews->featured_image, FILTER_VALIDATE_URL))
                <img src="{{ $featuredNews->featured_image }}"
                     alt="{{ $featuredNews->caption }}"
                     class="w-full h-full object-cover absolute inset-0"
                     onerror="this.style.display='none'">
                @else
                <div class="w-full h-full bg-blue-900 flex items-center justify-center text-white text-xl">
                    Image Not Available
                </div>
                @endif
                <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4 w-full">
                    <div class="text-sm text-gray-300">
                        RECnews • Updated {{ $featuredNews->created_at->format('M d, Y') }}
                    </div>
                    <h2 class="text-xl font-bold">{{ $featuredNews->caption }}</h2>
                </div>
            </div>
            @endif

            <!-- Side News (Max 5 news items) -->
            <div class="flex flex-col gap-4">
                @foreach($recentNews->take(5) as $news)
                <div class="flex gap-4 border-b pb-2 mt-4 side-news-card hover:shadow-lg hover:-translate-y-1 transition transform duration-300 cursor-pointer">
                    <div class="flex-shrink-0 w-20 h-16 bg-gray-200 rounded-lg overflow-hidden">
                        @if(filter_var($news->featured_image, FILTER_VALIDATE_URL))
                        <img src="{{ $news->featured_image }}"
                             alt="{{ Str::limit($news->caption, 50) }}"
                             class="w-full h-full object-cover"
                             onerror="this.style.display='none'">
                        @else
                        <div class="w-full h-full bg-blue-800 flex items-center justify-center text-white text-xs">
                            No Image
                        </div>
                        @endif
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">{{ $news->created_at->format('M d, Y') }} • Updated</p>
                        <h3 class="text-sm font-bold">{{ Str::limit($news->caption, 50) }}</h3>
                        <a href="#" class="text-blue-600 text-xs">Read more</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- START OF REC NEWS SECTION -->
    <section class="bg-white mt-12 mb-12">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-extrabold mb-6">REC NEWS</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($pastNews as $news)
                <div class="border rounded-lg overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-1 transition transform duration-300 cursor-pointer">
                    <div class="h-40 bg-gray-200">
                        @if(filter_var($news->featured_image, FILTER_VALIDATE_URL))
                        <img src="{{ $news->featured_image }}" 
                             alt="{{ Str::limit($news->caption, 50) }}"
                             class="w-full h-full object-cover"
                             onerror="this.style.display='none'">
                        @else
                        <div class="w-full h-full bg-blue-800 flex items-center justify-center text-white text-xs">
                            No Image
                        </div>
                        @endif
                    </div>
                    <div class="p-4">
                        <p class="text-xs text-gray-500">{{ $news->created_at->format('M d, Y') }}</p>
                        <h3 class="text-sm font-bold">{{ Str::limit($news->caption, 50) }}</h3>
                        <a href="#" class="text-blue-600 text-xs">Read more</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END OF REC NEWS SECTION -->
</div>
<!-- END OF NEWS SECTION -->
