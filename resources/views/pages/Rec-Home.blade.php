@extends('layouts.app')
@vite(['resources/css/home.css'])
@vite(['resources/js/home.js'])
@section('content')

<!-- MAIN CAROUSEL -->
<div class="relative w-full h-screen">
  <div id="custom-carousel" class="absolute w-full h-full" data-carousel="slide">
    <div class="relative w-full h-full overflow-hidden">
      <div class="hidden duration-700 ease-in-out relative w-full h-full" data-carousel-item>
        <div class="relative w-full h-full">
        <img src="{{ asset('images/home/carousel/MainLogo.png') }}" class="absolute w-full h-full object-cover z-0" alt="Image 1">
          <div class="absolute inset-0 z-10"></div>
        </div>

        <div class="absolute bottom-80 left-40 text-white z-20">
          <h1 class="text-5xl font-extrabold text-[#5E6FFB] shrikhand-regular">8th ANNIVERSARY</h1>
          <p class="mt-2 text-lg max-w-md text-justify">
              Join us as we mark 8 years of advancing radio engineering and communication technologies. Together, we've built a
              dynamic community of professionals, students, and enthusiasts shaping the future of the industry.
          </p>
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
      <p class="text-lg font-bold fs-elliot" id="slide-text">Next<br>8th ANNIVERSARY</p>
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
    <p class="text-lg font-medium text-gray-500 fs-elliot">Non-profit Organization</p>
    <h1 class="text-6xl font-extrabold tracking-tight text-[#132080] sm:text-5xl mt-2 shrikhand-regular">
      RADIO ENGINEERING CIRCLE INC.
    </h1>
    <p class="mt-4 text-xl leading-7 text-gray-600">
      Radio Engineering Circle Inc. is a dynamic community dedicated to advancing knowledge and innovation
      in radio engineering and communication technology. Our mission is to connect professionals, students,
      and enthusiasts to foster collaboration, share expertise, and drive the future of the industry forward.
    </p>
    <div class="mt-6">
      <a href="http://127.0.0.1:8000/AboutUs"
        class="inline-flex items-center px-6 py-3 text-xl font-medium text-white bg-[#3F53E8] rounded-md shadow-xl
                hover:bg-white hover:text-[#3F53E8] focus:outline-none focus:ring-2 focus:ring-offset-2
                focus:ring-gray-800 border border-[#3F53E8] fs-elliot">
          About REC &rarr;
      </a>
    </div>
  </div>
</section>
<!-- END OF INTRODUCTION SECTION -->
 
<!-- START OF NEWS SECTION -->
<div class="bg-white w-full opacity-0 scale-90 transition-all duration-[2000ms] ease-out" id="news-section">
        <section id="news-section" class="max-w-7xl mx-auto p-4">
            @include('partials.Pnews')
        </section>
    </div>
<!-- END OF NEWS SECTION -->


<!-- MEMBERSHIP SECTION -->
<section  class="bg-white py-12 ">
  <div id="membership-section" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 opacity-0 scale-90 transition-all duration-[2000ms] ease-out border-divider">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">

      <div class="bg-white p-8 rounded-lg">
        <h2 class="mt-2 text-4xl font-extrabold text-[#132080] sm:text-4xl shrikhand-regular">
          Unite for Engineering Excellence: Join Now!
        </h2>
        <p class="mt-4 text-xl text-gray-600 text-justify leading-relaxed">
          Join the Radio Engineering Circle and unlock a world of opportunities in communication technology! Connect
          with like-minded individuals, share knowledge, and enhance your skills through collaborative projects and events.
          Together, we can drive innovation and shape the future of our industry—become a member today!
        </p>
        <div class="mt-6 flex space-x-4">
          <a href="http://127.0.0.1:8000/MembershipInfo"
            class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium bg-[#3F53E8] text-white border border-[#3F53E8] rounded-md
                    hover:bg-white hover:text-[#3F53E8] hover:border-[#3F53E8]
                    transition-colors duration-300 ease-in-out">
            Apply Now !
          </a>
          <a href="http://127.0.0.1:8000/Events"
            class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium bg-[#7D0203] text-white border border-[#7D0203] rounded-md
                    hover:bg-white hover:text-[#7D0203] hover:border-[#7D0203] 
                    transition-colors duration-300 ease-in-out">
            Explore
          </a>
        </div>
      </div>

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

<!-- START OF EVENTS SECTION -->
<div class="bg-white w-full opacity-0 scale-90 transition-all duration-[2000ms] ease-out border-divider" id="events-section">

        <section id="events-section" class="max-w-7xl mx-auto p-4">
        @include('partials.Pevents')
        </section>
    </div>
<!-- END OF EVENTS SECTION -->

<!-- REC ACCORDION SECTION -->
<section id="accordion-section" class="bg-white py-12 opacity-0 scale-90 transition-all duration-[2000ms] ease-out">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-1 gap-8 items-stretch">
      <div class="px-12 py-8 rounded-lg flex flex-col">
        <h1 class="text-5xl font-extrabold text-[#132080] text-center pb-8 shrikhand-regular">FREQUENTLY ASKED QUESTIONS</h1>
        <section class="grid grid-cols-1 gap-y-3 divide-y divide-[#3F53E8]">
          <details open class="group py-1  transition-all duration-[2000ms] ease-out">
            <summary class=" text-xl flex cursor-pointer flex-row items-center justify-between py-1 font-semibold text-gray-800 marker:[font-size:0px] fs-elliot">
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
            <p class="text-gray-500 text-lg max-h-0 overflow-hidden opacity-0 transition-all duration-[2000ms] ease-out group-open:max-h-60 group-open:opacity-100">
              REC is a premiere non-stock, non-profit amateur radio club in the Philippines focused on promoting excellence in amateur radio.
            </p>
          </details>

          <details class="group py-1 transition-all duration-[2000ms] ease-out">
            <summary class="text-xl flex cursor-pointer flex-row items-center justify-between py-1 font-semibold text-gray-800 marker:[font-size:0px] fs-elliot">
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
            <p class="text-gray-500 text-lg max-h-0 overflow-hidden opacity-0 transition-all duration-[2000ms] ease-out group-open:max-h-60 group-open:opacity-100">
              Yes, REC is registered with the Securities and Exchange Commission and recognized by other government agencies.
            </p>
          </details>

          <details class="group py-1  transition-all duration-[2000ms] ease-out">
            <summary class="text-xl flex cursor-pointer flex-row items-center justify-between py-1 font-semibold text-gray-800 marker:[font-size:0px] fs-elliot">
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
            <p class="text-lg text-gray-500 max-h-0 overflow-hidden opacity-0 transition-all duration-[2000ms] ease-out group-open:max-h-60 group-open:opacity-100">
            Interest in amateur radio, completion of an application form and passing a screening interview conducted by the Membership Committee.
            </p>
          </details>

          <details class="group py-1  transition-all duration-[2000ms] ease-out">
            <summary class="text-xl flex cursor-pointer flex-row items-center justify-between py-1 font-semibold text-gray-800 marker:[font-size:0px] fs-elliot">
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
            <p class="text-lg text-gray-500 max-h-0 overflow-hidden opacity-0 transition-all duration-[2000ms] ease-out group-open:max-h-60 group-open:opacity-100">
            Notices are sent electronically. Annual meeting notices are sent 21 days in advance, while monthly notices are sent 7 days in advance.
            </p>
          </details>

          <details class="group py-1 transition-all duration-[2000ms] ease-out">
            <summary class="text-xl flex cursor-pointer flex-row items-center justify-between py-1 font-semibold text-gray-800 marker:[font-size:0px] fs-elliot">
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
            <p class="text-lg text-gray-500 max-h-0 overflow-hidden opacity-0 transition-all duration-[2000ms] ease-out group-open:max-h-60 group-open:opacity-100">
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
<section id="sponsors-section" class="bg-white py-12 opacity-0 scale-90 transition-all duration-[2000ms] ease-out border-divider">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h1 class="text-5xl font-extrabold text-[#132080] text-center pb-8 shrikhand-regular">OUR SUPPORTERS</h1>
        <p class="text-lg
        
        text-gray-600 mb-8 max-w-2xl mx-auto fs-elliot">We are grateful for the support of our amazing sponsors who make our work possible.</p>
        
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