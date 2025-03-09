@extends('components.app')
<!-- LINKS FOR TAILWIND -->
<header>
  <!-- CSS FOR THE HOME.BLADE.PHP -->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <!-- JAVASCRIPT FOR THE HOME.BLADE.PHP -->
  <script src="{{ asset('js/home.js') }}"></script>
</header>

@section('content')
<!-- MAIN CAROUSEL -->
<div class="relative w-full h-screen">
  <div id="custom-carousel" class="absolute w-full h-full" data-carousel="slide">
    <div class="relative w-full h-full overflow-hidden">
      <!-- MAIN VIDEO -->
      <div class="hidden duration-700 ease-in-out relative w-full h-full" data-carousel-item>
        <div class="relative w-full h-full">
        <img src="{{ asset('images/home/carousel/Main.jpg') }}" class="absolute w-full h-full object-cover z-0" alt="Image 1">
          <div class="absolute inset-0 z-10"></div>
        </div>

        <div class="absolute bottom-60 left-60 text-white z-20">
          <h1 class="text-5xl font-extrabold text-[#5E6FFB]">8th ANNIVERSARY</h1>
          <p class="mt-2 text-sm md:text-base max-w-md">
            Join us as we mark 8 years of advancing radio engineering and communication technologies. Together, we've built a 
            dynamic community of professionals, students, and enthusiasts shaping the future of the industry.
          </p>
          <a href="#" class="mt-4 inline-block text-sm font-extrabold">APPLY NOW!</a>
        </div>
      </div>

      <!-- MAIN BANNER 1 -->
      <div class="hidden duration-700 ease-in-out relative w-full h-full" data-carousel-item>
        <div class="relative w-full h-full">
          <img src="{{ asset('images/home/carousel/Events1.png') }}" class="absolute w-full h-full object-cover z-0" alt="Image 1">
          <div class="absolute inset-0 bg-black opacity-30 z-10"></div>
        </div>
        <div class="absolute bottom-20 left-20 text-white z-20">
          <a href="#" class="mt-4 inline-block text-sm font-extrabold">LEARN MORE</a>
        </div>
      </div>

      <!-- MAIN BANNER 2 -->
      <div class="hidden duration-700 ease-in-out relative w-full h-full" data-carousel-item>
        <div class="relative w-full h-full">
          <img src="{{ asset('images/home/carousel/MainC4.png') }}" class="absolute w-full h-full object-cover z-0" alt="Image 1">
          <div class="absolute inset-0 bg-black opacity-30 z-10"></div>
        </div>
        <div class="absolute bottom-20 left-20 text-white z-20">
          <a href="#" class="mt-4 inline-block text-sm font-extrabold">LEARN MORE</a>
        </div>
      </div>

       <!-- MAIN BANNER 3 -->
      <div class="hidden duration-700 ease-in-out relative w-full h-full" data-carousel-item>
        <div class="relative w-full h-full">
          <img src="{{ asset('images/home/carousel/MainC5.png') }}" class="absolute w-full h-full object-cover z-0" alt="Image 1">
          <div class="absolute inset-0 bg-black opacity-30 z-10"></div>
        </div>
        <div class="absolute bottom-20 left-20 text-white z-20">
          <a href="#" class="mt-4 inline-block text-sm font-extrabold">LEARN MORE</a>
        </div>
      </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="absolute bottom-80 right-80 text-white z-30">
      <p class="text-sm" id="slide-counter">1 / 2</p>
      <p class="text-lg font-bold" id="slide-text">Next<br>8th ANNIVERSARY</p>
      <div class="mt-4 flex space-x-4">
        <button id="prev-button" type="button" class="inline-flex items-center justify-center w-10 h-10 bg-[#3F53E8] text-white border border-[#3F53E8] rounded-full shadow hover:bg-transparent hover:text-white hover:border-white transition duration-300">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button id="next-button" type="button" class="inline-flex items-center justify-center w-10 h-10 bg-[#3F53E8] text-white border border-[#3F53E8] rounded-full shadow hover:bg-transparent hover:text-white hover:border-white transition duration-300">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- END OF IMAGE CAROUSEL -->

<!-- INTRODUCTION SECTION -->
<section class="bg-white py-12 ">
  <div class="max-w-4xl mx-auto text-center opacity-0 scale-90 transition-all duration-[2000ms] ease-out border-divider" id="introduction-section">
    <p class="text-lg font-medium text-gray-500">Non-profit Organization</p>
    <h1 class="text-6xl font-extrabold tracking-tight text-[#132080] sm:text-5xl mt-2">
      RADIO ENGINEERING CIRCLE INC.
    </h1>
    <p class="mt-4 text-lg leading-7 text-gray-600">
      Radio Engineering Circle Inc. is a dynamic community dedicated to advancing knowledge and innovation 
      in radio engineering and communication technology. Our mission is to connect professionals, students, 
      and enthusiasts to foster collaboration, share expertise, and drive the future of the industry forward.
    </p>
    <div class="mt-6">
      <a href="#"
        class="inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-[#3F53E8] rounded-md shadow-xl 
                hover:bg-white hover:text-[#3F53E8] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 border border-[#3F53E8]">
          About REC &rarr;
      </a>
    </div>
  </div>
</section>
<!-- END OF INTRODUCTION SECTION -->
 
<!-- START OF NEWS SECTION -->
<div class="bg-white w-full">
    <section id="news-section" class="max-w-7xl mx-auto p-4 opacity-0 scale-90 transition-all duration-[2000ms] ease-out ">
        <h1 class="pt-2 pb-8 text-center text-5xl text-[#132080] font-extrabold">NEWS UPDATES</h1>

        @if(isset($news) && $news->count())
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                @foreach ($news as $key => $item)
                    @if ($key === 0)
                        <!-- Featured Story Section -->
                        <div class="lg:col-span-2 relative">
                            <img src="{{ asset($item->image) }}" alt="Featured Story" class="w-full h-auto">
                            <div class="absolute top-0 left-0 bg-red-600 text-white px-3 py-1 text-sm font-bold">
                                {{ $item->category }}
                            </div>
                            <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4 w-full">
                                <div class="text-sm text-gray-300">
                                    RECnews • Updated {{ $item->created_at->format('M d, Y') }}
                                </div>
                                <h2 class="text-xl font-bold">{{ $item->title }}</h2>
                                <p class="text-sm text-gray-300">{{ Str::limit($item->content, 100) }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach

                <div class="flex flex-col gap-4">
                    @foreach ($news->skip(1) as $item)
                        <div class="flex gap-4 border-b pb-2 mt-4 side-news-card">
                            <img src="{{ asset($item->image) }}" alt="Event Image" class="w-20 h-16 rounded-lg">
                            <div>
                                <p class="text-xs text-gray-500">
                                    {{ $item->created_at->format('M d, Y') }} • Updated
                                </p>
                                <h3 class="text-sm font-bold">{{ $item->title }}</h3>
                                <a href="#" class="text-blue-600 text-xs">Read more</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p class="text-center text-gray-500">No news available.</p>
        @endif
    </section>
</div>
<!-- END OF NEWS SECTION -->


<!-- MEMBERSHIP SECTION -->
<section  class="bg-white py-12 ">
  <div id="membership-section" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 opacity-0 scale-90 transition-all duration-[2000ms] ease-out">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">

      <!-- Left Column (Text Content) -->
      <div class="bg-white p-8 rounded-lg"> <!-- Removed shadow-lg -->
        <h2 class="mt-2 text-4xl font-extrabold text-[#132080] sm:text-5xl">
          Unite for Engineering Excellence: Join Now!
        </h2>
        <p class="mt-4 text-lg text-gray-600 text-justify leading-relaxed">
          Join the Radio Engineering Circle and unlock a world of opportunities in communication technology! Connect 
          with like-minded individuals, share knowledge, and enhance your skills through collaborative projects and events. 
          Together, we can drive innovation and shape the future of our industry—become a member today!
        </p>
        <div class="mt-6 flex space-x-4">
          <a href="#"
            class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium bg-[#3F53E8] text-white border border-[#3F53E8] rounded-md
                    hover:bg-white hover:text-[#3F53E8] hover:border-[#3F53E8]
                    transition-colors duration-300 ease-in-out">
            Apply Now !
          </a>
          <a href="#"
            class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium bg-[#7D0203] text-white border border-[#7D0203] rounded-md
                    hover:bg-white hover:text-[#7D0203] hover:border-[#7D0203] 
                    transition-colors duration-300 ease-in-out">
            Explore
          </a>
        </div>
      </div>

      <!-- Right Column (YouTube Video Embed) -->
      <div class="flex justify-center">
        <iframe class="w-full lg:w-[500px] h-[250px] lg:h-[300px] rounded-lg" 
          src="https://www.youtube.com/embed/YOUR_VIDEO_ID" 
          title="YouTube Video"
          allowfullscreen>
        </iframe>
      </div>
      
    </div>
  </div>
</section>
<!-- END OF MEMBERSHIP SECTION -->


<!-- EVENT TIMELINE -->
<section class="py-12 bg-white ">   
<div id="events-section" class="container mx-auto px-4 py-8 max-w-screen-xl opacity-0 scale-90 transition-all duration-[2000ms] ease-out">
  <h1 class="text-5xl font-extrabold text-[#132080] text-center pb-8">EVENT ANNOUNCEMENTS</h1>
    <div class="flex justify-between items-center mb-6">
        <button id="btn-2024" class="text-[#132080] text-2xl font-bold">2024</button>
        <button id="btn-2025" class="text-[#132080] text-5xl font-bold">2025</button>
        <button id="btn-2026" class="text-[#132080] text-2xl font-bold">2026</button>
    </div>

    <!-- Event list for 2024 -->
    <div id="event-list-2024" class="space-y-4 hidden">
        <!-- Event item for 2024 -->
        <div class="flex gap-4 group hover:bg-blue-100 hover:shadow-lg transform hover:scale-105 transition duration-300">
            <!-- Date -->
            <div class="text-center text-[#132080] w-20">
                <p class="text-5xl font-bold">18</p>
                <p class="text-lg">DEC</p>
            </div>

            <!-- Event details -->
            <div class="flex-1 flex gap-4 bg-white shadow  p-4">
                <img src="{{ asset('images/E5.jpg') }}" alt="Event Image" class="w-24 h-24 object-cover rounded">
                <div>
                    <h2 class="text-xl font-semibold text-[#132080]">Join us tonight for the latest edition of our evening net on the DZ1REC Amateur Channels!</h2>
                    <p class="text-sm text-gray-600">We'll be on the air at 8:30 PM Philippine Standard Time (2030H) with 4F1PH as our net control station.</p>
                    <p class="text-sm text-gray-600">You can catch us on the DZ1REC Amateur Channels via AllStarLink, EchoLink, TGIF DMR, YSF, and M17.</p>
                    <p class="text-sm text-blue-600">#OneREC #AmateurRadio #2024Summit #DZ1REC</p>
                </div>
            </div>
        </div>

        <div class="flex gap-4 group hover:bg-blue-100 hover:shadow-lg transform hover:scale-105 transition duration-300">
            <!-- Date -->
            <div class="text-center text-[#132080] w-20">
                <p class="text-5xl font-bold">13</p>
                <p class="text-lg">DEC</p>
            </div>

            <!-- Event details -->
            <div class="flex-1 flex gap-4 bg-white shadow  p-4">
                <img src="{{ asset('images/E6.jpg') }}" alt="Event Image" class="w-24 h-24 object-cover rounded">
                <div>
                    <h2 class="text-xl font-semibold text-[#132080]">Tonight, 8:30 PM PST! Join DZ1REC's evening net on Amateur Digital Channels! Net control:</h2>
                    <p class="text-sm text-gray-600">4H1FMF. Catch us on AllStar Link, EchoLink, TGIF DMR, YSF & M17!                    </p>
                    <p class="text-sm text-blue-600">#OneREC #AmateurRadio #2024Summit #DZ1REC</p>
                </div>
            </div>
        </div>

        <div class="flex gap-4 group hover:bg-blue-100 hover:shadow-lg transform hover:scale-105 transition duration-300">
            <!-- Date -->
            <div class="text-center text-[#132080] w-20">
                <p class="text-5xl font-bold">09</p>
                <p class="text-lg">DEC</p>
            </div>

            <!-- Event details -->
            <div class="flex-1 flex gap-4 bg-white shadow  p-4">
                <img src="{{ asset('images/E7.jpg') }}" alt="Event Image" class="w-24 h-24 object-cover rounded">
                <div>
                    <h2 class="text-xl font-semibold text-[#132080]">We would like to invite you to join the latest edition of our evening net on DZ1REC Channels and 
                      the Kapihan Network today, December 9, at 2000H Philippine Standard Time.</h2>
                    <p class="text-sm text-gray-600">Tonight’s net control station will be 4F1PH. You can catch us on the DZ1REC Channels via AllStar Link, EchoLink, 
                      TGIF DMR, YSF, and M17, all connected to the Kapihan Network.</p>
                    <p class="text-sm text-blue-600">#OneREC #AmateurRadio #2024Summit #DZ1REC</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Event list for 2025 (default shown) -->
    <div id="event-list-2025" class="space-y-4">
        <!-- Event item for 2025 -->
        <div class="flex gap-4 group hover:bg-blue-100 hover:shadow-lg transform hover:scale-105 transition duration-300">
            <!-- Date -->
            <div class="text-center text-[#132080] w-20">
                <p class="text-5xl font-bold">01</p>
                <p class="text-lg">FEB</p>
            </div>

            <!-- Event details -->
            <div class="flex-1 flex gap-4 bg-white shadow  p-4">
                <img src="{{ asset('images/news_events/E2.jpg') }}" alt="Event Image" class="w-24 h-24 object-cover rounded">
                <div>
                    <h2 class="text-xl font-semibold text-[#132080]">Join us on February 1 for the Fundamentals of Amateur Radio seminar!</h2>
                    <p class="text-sm text-gray-600">Mark your calendars! Stay tuned to the Radio Engineering Circle Facebook page for registration details and updates.</p>
                    <p class="text-sm text-blue-600">#OneREC #AmateurRadio #PropagateXRadiate #DZ1REC</p>
                </div>
            </div>
        </div>

        <!-- Event item for 2025 -->
        <div class="flex gap-4 group hover:bg-blue-100 hover:shadow-lg transform hover:scale-105 transition duration-300">
            <!-- Date -->
            <div class="text-center text-[#132080] w-20">
                <p class="text-5xl font-bold">20</p>
                <p class="text-lg">JAN</p>
            </div>

            <!-- Event details -->
            <div class="flex-1 flex gap-4 bg-white shadow p-4">
                <img src="{{ asset('images/news_events/E1.jpg') }}" alt="Event Image" class="w-24 h-24 object-cover rounded">
                <div>
                    <h2 class="text-xl font-semibold text-[#132080]">Please support our evening net call at DZ1REC - Radio Engineering Circle, Inc.</h2>
                    <p class="text-sm text-gray-600">Net Call Schedule: 20 January 2025 @8:00pm ~ 9:30pm</p>
                    <p class="text-sm text-gray-600">NCS: Stephen Mark Davether Perez, 4G1NYS</p>
                    <p class="text-sm text-blue-600">#OneREC #AmateurRadio #PropagateXRadiate #DZ1REC</p>
                </div>
            </div>
        </div>

        <!-- Event item for 2025 -->
        <div class="flex gap-4 group hover:bg-blue-100 hover:shadow-lg transform hover:scale-105 transition duration-300">
            <!-- Date -->
            <div class="text-center text-[#132080] w-20">
                <p class="text-5xl font-bold">10</p>
                <p class="text-lg">JAN</p>
            </div>

            <!-- Event details -->
            <div class="flex-1 flex gap-4 bg-white shadow p-4">
                <img src="{{ asset('images/news_events/E3.jpg') }}" alt="Event Image" class="w-24 h-24 object-cover rounded">
                <div>
                    <h2 class="text-xl font-semibold text-[#132080]">Join us tonight for the latest edition of our evening net on the DZ1REC Amateur Channels.</h2>
                    <p class="text-sm text-gray-600">We'll be on the air at 9:00 PM Philippine Standard Time (2100H) with 4F1PH as our net control station.</p>
                    <p class="text-sm text-gray-600">You can catch us on the DZ1REC Amateur Channels via AllStarLink, EchoLink, TGIF DMR, YSF, and M17.</p>
                    <p class="text-sm text-blue-600">#OneREC #AmateurRadio #PropagateXRadiate #DZ1REC</p>
                </div>
            </div>
        </div>

        <!-- Hidden Event item for 2025 (to be shown after clicking "Load More") -->
        <div id="event-item-4" class="flex gap-4 group hover:bg-blue-100 hover:shadow-lg transform hover:scale-105 transition duration-300 hidden">
            <!-- Date -->
            <div class="text-center text-[#132080] w-20">
                <p class="text-5xl font-bold">02</p>
                <p class="text-lg">JAN</p>
            </div>

            <!-- Event details -->
            <div class="flex-1 flex gap-4 bg-white shadow p-4">
                <img src="{{ asset('images/news_events/ E4.jpg') }}" alt="Event Image" class="w-24 h-24 object-cover rounded">
                <div>
                    <h2 class="text-xl font-semibold text-[#132080]">Happy New Year! Join us for the 2025 Annual Amateur Radio Convention!</h2>
                    <p class="text-sm text-gray-600">Get ready for presentations, demonstrations, and networking opportunities with amateur radio enthusiasts from around the world!</p>
                    <p class="text-sm text-blue-600">#OneREC #AmateurRadio #PropagateXRadiate #DZ1REC</p>
                </div>
            </div>
        </div>

        <!-- "Load More" Button -->
        <div class="text-center">
            <button id="load-more-btn" class=" bg-[#3F53E8] px-4 py-2 rounded-md shadow text-white text-lg font-medium font-bold text-lg mt-4 
            border border-[#3F53E8] hover:bg-white hover:text-[#3F53E8] hover:border-[#3F53E8] transition-colors duration-300 ease-in-out">Load More</button>
        </div>
    </div>

    <!-- Event list for 2026 (Nothing to show) -->
    <div id="event-list-2026" class="space-y-4 hidden">
        <p class="text-center text-xl text-gray-600">Nothing to show at this time for 2026.</p>
    </div>
</div>
<!-- END OF EVENT TIMELINE -->

<!-- START OF "THE COMMUNITY" SECTION -->
<section id="community-section" class="py-12 bg-white opacity-0 scale-90 transition-all duration-[2000ms] ease-out border-divider" id="introduction-section">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <h1 class="text-5xl font-extrabold text-[#132080] text-center pb-8">THE COMMUNITY</h1>
    
    <!-- Grid Container -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <!-- Image Column 1 -->
      <div class="space-y-6">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community1.jpg') }}" alt="Community 1">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community2.jpg') }}" alt="Community 2">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community3.jpg') }}" alt="Community 3">
      </div>

      <!-- Image Column 2 -->
      <div class="space-y-6">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community4.jpg') }}" alt="Community 4">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community5.jpg') }}" alt="Community 5">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community6.jpg') }}" alt="Community 6">
      </div>

      <!-- Image Column 3 -->
      <div class="space-y-6">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community7.jpg') }}" alt="Community 7">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community8.jpg') }}" alt="Community 8">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community9.jpg') }}" alt="Community 9">
      </div>

      <!-- Image Column 4 -->
      <div class="space-y-6">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community10.jpg') }}" alt="Community 10">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community11.jpg') }}" alt="Community 11">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community12.jpg') }}" alt="Community 12">
      </div>

    </div>
  </div>
</section>
<!-- END OF "THE COMMUNITY" SECTION -->

<!-- REC ACCORDION SECTION -->
<section id="accordion-section" class="bg-white py-12 opacity-0 scale-90 transition-all duration-[2000ms] ease-out">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-1 gap-8 items-stretch">
      <!-- FAQ Section -->
      <div class="px-12 py-8 rounded-lg flex flex-col">
        <h1 class="text-5xl font-extrabold text-[#132080] text-center pb-8">FREQUENTLY ASKED QUESTIONS</h1>
        <section class="grid grid-cols-1 gap-y-3 divide-y divide-[#3F53E8]">
          <details open class="group py-1 text-lg transition-all duration-[2000ms] ease-out">
            <summary class="flex cursor-pointer flex-row items-center justify-between py-1 font-semibold text-gray-800 marker:[font-size:0px]">
              What is the Radio Engineering Circle, Inc. (REC)?
              <svg
                class="h-6 w-6 rotate-0 transform text-[#3F53E8] group-open:rotate-180 transition-transform duration-[2000ms] ease-out"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
              </svg>
            </summary>
            <p class="text-gray-500 max-h-0 overflow-hidden opacity-0 transition-all duration-[2000ms] ease-out group-open:max-h-60 group-open:opacity-100">
              REC is a premiere non-stock, non-profit amateur radio club in the Philippines focused on promoting excellence in amateur radio.
            </p>
          </details>

          <details class="group py-1 text-lg transition-all duration-[2000ms] ease-out">
            <summary class="flex cursor-pointer flex-row items-center justify-between py-1 font-semibold text-gray-800 marker:[font-size:0px]">
              Is REC affiliated with any government agencies?
              <svg
                class="h-6 w-6 rotate-0 transform text-[#3F53E8] group-open:rotate-180 transition-transform duration-[2000ms] ease-out"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
              </svg>
            </summary>
            <p class="text-gray-500 max-h-0 overflow-hidden opacity-0 transition-all duration-[2000ms] ease-out group-open:max-h-60 group-open:opacity-100">
              Yes, REC is registered with the Securities and Exchange Commission and recognized by other government agencies.
            </p>
          </details>

          <details class="group py-1 text-lg transition-all duration-[2000ms] ease-out">
            <summary class="flex cursor-pointer flex-row items-center justify-between py-1 font-semibold text-gray-800 marker:[font-size:0px]">
            What is required to join REC?
              <svg
                class="h-6 w-6 rotate-0 transform text-[#3F53E8] group-open:rotate-180 transition-transform duration-[2000ms] ease-out"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
              </svg>
            </summary>
            <p class="text-gray-500 max-h-0 overflow-hidden opacity-0 transition-all duration-[2000ms] ease-out group-open:max-h-60 group-open:opacity-100">
            Interest in amateur radio, completion of an application form and passing a screening interview conducted by the Membership Committee.
            </p>
          </details>

          <details class="group py-1 text-lg transition-all duration-[2000ms] ease-out">
            <summary class="flex cursor-pointer flex-row items-center justify-between py-1 font-semibold text-gray-800 marker:[font-size:0px]">
              How are meeting notices sent?
              <svg
                class="h-6 w-6 rotate-0 transform text-[#3F53E8] group-open:rotate-180 transition-transform duration-[2000ms] ease-out"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
              </svg>
            </summary>
            <p class="text-gray-500 max-h-0 overflow-hidden opacity-0 transition-all duration-[2000ms] ease-out group-open:max-h-60 group-open:opacity-100">
            Notices are sent electronically. Annual meeting notices are sent 21 days in advance, while monthly notices are sent 7 days in advance.
            </p>
          </details>

          <details class="group py-1 text-lg transition-all duration-[2000ms] ease-out">
            <summary class="flex cursor-pointer flex-row items-center justify-between py-1 font-semibold text-gray-800 marker:[font-size:0px]">
            What qualifications are required to run for the Board?
              <svg
                class="h-6 w-6 rotate-0 transform text-[#3F53E8] group-open:rotate-180 transition-transform duration-[2000ms] ease-out"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
              </svg>
            </summary>
            <p class="text-gray-500 max-h-0 overflow-hidden opacity-0 transition-all duration-[2000ms] ease-out group-open:max-h-60 group-open:opacity-100">
            Nomination by three Trustees or the President. Status as an amateur radio operator or applicant.
            </p>
          </details>
        </section>
      </div>
    </div>
  </div>
</section>
<!-- END OF ACCORDION SECTION -->

<!-- START OF SPONSOR SECTION -->
<section id="sponsors-section" class="bg-white py-12 opacity-0 scale-90 transition-all duration-[2000ms] ease-out ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h1 class="text-5xl font-extrabold text-[#132080] text-center pb-8">OUR SUPPORTERS</h1>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">We are grateful for the support of our amazing sponsors who make our work possible.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-1 gap-8 items-stretch">
            <div class="px-12 py-8 rounded-lg flex flex-col">
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6 items-center">
                    <div class="bg-white p-4 rounded-lg shadow-md flex justify-center transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                        <img src="{{ asset('images/home/supporters/Placeholder.jpg') }}" alt="Sponsor 1" class="h-16">
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md flex justify-center transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                        <img src="{{ asset('images/home/supporters/Placeholder.jpg') }}" alt="Sponsor 2" class="h-16">
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md flex justify-center transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                        <img src="{{ asset('images/home/supporters/Placeholder.jpg') }}" alt="Sponsor 3" class="h-16">
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md flex justify-center transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                        <img src="{{ asset('images/home/supporters/Placeholder.jpg') }}" alt="Sponsor 4" class="h-16">
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md flex justify-center transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                        <img src="{{ asset('images/home/supporters/Placeholder.jpg') }}" alt="Sponsor 5" class="h-16">
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md flex justify-center transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                        <img src="{{ asset('images/home/supporters/Placeholder.jpg') }}" alt="Sponsor 6" class="h-16">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- END OF SPONSOR SECTION -->