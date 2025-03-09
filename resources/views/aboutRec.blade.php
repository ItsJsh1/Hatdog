<!-- REC  NAVBAR -->
<x-navbar>
</x-navbar>

<!-- INTRODUCTION SECTION -->
<section class="bg-white py-12">
  <div class="max-w-4xl mx-auto text-center">
    <!-- Title with letter spacing -->
    <h1 class="text-4xl font-extrabold tracking-wider text-[#132080] sm:text-5xl mt-2">
      ABOUT US
    </h1>

        <h2 class="mt-14 text-3xl font-extrabold tracking-wider text-gray-900 sm:text-3xl mt-2">
        Preamble
        </h2>

    <!-- Description text -->
    <p class="mt-6 text-lg leading-7 text-gray-600">
    Radio Engineering Circle, Inc., as a premiere amateur radio club in the Philippines, 
    shall always uphold its principles, vision, mission, goals, and objectives, promote excellence in the field of amateur radio, 
    and build a peaceful culture of harmony and camaraderie, driven by our spirit of unity. 
    We, the honored members of REC, Inc., imploring the aid of Divine Providence, 
    do ordain and promulgate these by-laws
    </p>
  </div>
</section>
<!-- END OF INTRODUCTION SECTION -->

<!-- VISION AND MISSION SECTION -->
<section class="bg-white py-8">
  <div class="max-w-4xl mx-auto bg-gray-300 rounded-lg shadow-lg p-6">
    <div class="flex flex-col md:flex-row items-center md:items-stretch">
      <!-- Vision -->
      <div class="text-center md:w-1/2 transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-gray-200 rounded-md p-4">
        <h3 class="text-lg font-bold text-gray-800">REC Vision Statement</h3>
        <p class="mt-2 text-sm text-gray-700">
          The vision of the organization is to be a distinguished and globally recognized amateur radio club.
        </p>
      </div>
      <!-- Vertical Divider -->
      <div class="hidden md:block w-px bg-gray-400 md:h-auto"></div>
      <!-- Mission -->
      <div class="text-center md:w-1/2 transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-gray-200 rounded-md p-4">
        <h3 class="text-lg font-bold text-gray-800">REC Mission Statement</h3>
        <p class="mt-2 text-sm text-gray-700">
          The mission of the organization is to develop world-class excellence by being proactive in the field of amateur radio, and by developing its members through amateur radio-related activities.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- END VISION AND MISSION SECTION  -->

<!-- GOALS AND OBJECTIVES SECTION -->
<section class="bg-white py-12">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Goals -->
      <div class="bg-gray-300 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-gray-200">
        <h3 class="text-lg font-bold text-gray-800 mb-4">Goals of the organization</h3>
        <ul class="list-disc list-inside text-gray-600 space-y-2">
          <li>To engage in an advocacy-driven community.</li>
          <li>To develop mutually beneficial and lasting relationships with other organizations through sharing a common interest in amateur radio, communications, management, and emergency response.</li>
          <li>To achieve global excellence, both in understanding and applying the principles of amateur radio.</li>
        </ul>
      </div>
      <!-- Objectives -->
      <div class="bg-gray-300 p-6 rounded-lg shadow-md transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-gray-200">
        <h3 class="text-lg font-bold text-gray-800 mb-4">Objectives of the organization</h3>
        <ul class="list-disc list-inside text-gray-600 space-y-2">
          <li>To support targeted communities and/or organizations through strategic programs/partnerships that improve the amateur radio community.</li>
          <li>To uphold unity among the members by developing respect, peace, and collaboration.</li>
          <li>To establish relationships with other organizations for the exploration of amateur radio.</li>
          <li>To promote excellence, proactivity, and social awareness among members through empowerment and advocacy-centric activities.</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- END GOALS AND OBJECTIVES SECTION -->

<!-- LOGO SECTION -->
<section class="bg-white py-12">
  <div class="max-w-7xl mx-auto px-6 sm:px-8 grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="relative bg-gray-300 rounded-lg p-6 overflow-hidden border border-gray-400">
      <img 
        src="{{ asset('images/Imageholder.png') }}" 
        alt="REC Logo" 
        class="absolute inset-0 w-full h-full object-cover"
      >
    </div>
    <div class="rounded-lg p-6 relative bg-transparent border border-gray-400">
      <div class="hidden md:block">
        <h3 class="text-lg font-bold text-gray-800 mb-4">The Logo</h3>
        <ol class="list-decimal list-inside text-gray-600 space-y-2">
          <li>
            The official logo of the organization is based on the Smith Chart invented by Phillip H. Smith, which is a graphical aid or nomogram designed for electrical and electronics engineers specializing in Radio Frequency (RF).
          </li>
          <li>The letters R, E, and C, symbolize the acronym of the Organization.</li>
          <li>
            The logo, and the organization, shall have blue and white as its official colors, symbolizing intelligence and righteousness.
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- END OF LOGO SECTION -->

<x-scroll>
</x-scroll>

<x-chatbot>
</x-chatbot>

<!-- REC FOOTER BAR -->
<x-footer>
</x-footer>