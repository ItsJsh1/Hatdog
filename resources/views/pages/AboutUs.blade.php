@extends('layouts.app')
@section('content')
@vite(['resources/css/aboutUs.css'])

<section class="relative w-full h-[500px] bg-fixed bg-center bg-cover bg-[url('{{ asset('images/home/aboutUs/AboutUs.jpg') }}')]">
  <div class="absolute inset-0 bg-black bg-opacity-30"></div>
</section>

<section class="bg-white py-12">
  <div class="max-w-4xl mx-auto text-center p-8 rounded-lg">
    <div class="flex justify-center mb-4">
      <img src="{{ asset('images/home/aboutUs/Preamble.png') }}" alt="REC Logo" class="w-16 h-16">
    </div>
    <h2 class="text-3xl font-extrabold tracking-wider text-[#132080] sm:text-4xl shrikhand-regular">
      PREAMBLE
    </h2>
    <p class="mt-6 text-xl leading-7 text-gray-600">
      Radio Engineering Circle, Inc., as a premiere amateur radio club in the Philippines, 
      shall always uphold its principles, vision, mission, goals, and objectives, promote excellence in the field of amateur radio, 
      and build a peaceful culture of harmony and camaraderie, driven by our spirit of unity. 
      We, the honored members of REC, Inc., imploring the aid of Divine Providence, 
      do ordain and promulgate these by-laws.
    </p>
  </div>
</section>

<section class="bg-white py-8">
  <div class="max-w-6xl mx-auto bg-white rounded-lg shadow-2xl p-10">
    <div class="flex flex-col md:flex-row items-center md:items-stretch relative">
      <div class="flex-1 text-center transition-transform transform hover:scale-105 hover:shadow-lg 
                  bg-white rounded-l-2xl p-6 duration-300 relative hover:z-10 hover:bg-blue-100">
        <div class="flex justify-center mb-4">
          <img src="{{ asset('images/home/aboutUs/Vision.png') }}" alt="Vision Logo" class="w-20 h-20 object-contain">
        </div>
        <h3 class="text-2xl font-bold text-[#132080] shrikhand-regular">REC VISION STATEMENT</h3>
        <p class="text-lg mt-4 text-gray-700">
          The vision of the organization is to be a distinguished and globally recognized amateur radio club.
        </p>
      </div>

      <div class="hidden md:block w-px bg-gray-300 md:h-auto"></div>

      <div class="flex-1 text-center transition-transform transform hover:scale-105 hover:shadow-lg 
                  bg-white rounded-r-2xl p-6 duration-300 relative hover:z-10 hover:bg-blue-100">
        <div class="flex justify-center mb-4">
          <img src="{{ asset('images/home/aboutUs/Mission.png') }}" alt="Mission Logo" class="w-20 h-20 object-contain">
        </div>
        <h3 class="text-2xl font-bold text-[#132080] shrikhand-regular">REC MISSION STATEMENT</h3>
        <p class="text-lg mt-4 text-gray-700">
          The mission of the organization is to develop world-class excellence by being proactive in the field of amateur radio, and by developing its members through amateur radio-related activities.
        </p>
      </div>

    </div>
  </div>
</section>

<section class="bg-white py-12">
  <div class="max-w-6xl mx-auto text-center">
    <div class="flex justify-center mb-4">
        <img src="{{ asset('images/home/aboutUs/Goals.png') }}" alt="REC Logo" class="w-16 h-16">
      </div>
      <h2 class="text-3xl font-extrabold tracking-wider text-[#132080] sm:text-4xl shrikhand-regular">
        GOALS
      </h2>
    <p class="mt-4 text-xl text-gray-600">
      Our goals and objectives drive our commitment to excellence and community service.
    </p>

    <div class="grid md:grid-cols-3 gap-6 mt-10">
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-transform transform  hover:bg-blue-100 hover:scale-105">
        <div class="flex justify-center mb-4">
          <img src="{{ asset('images/home/aboutUs/Advocacy.png') }}" alt="Education Goal" class="w-16 h-16">
        </div>
        <h3 class="text-2xl font-bold text-gray-800 fs-elliot">Advocacy</h3>
        <p class="mt-2 text-xl text-gray-600">
          To engage in an advocacy-driven community.
        </p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-transform transform  hover:bg-blue-100 hover:scale-105">
        <div class="flex justify-center mb-4">
          <img src="{{ asset('images/home/aboutUs/Community.png') }}" alt="Community Goal" class="w-16 h-16">
        </div>
        <h3 class="text-2xl font-bold text-gray-800 fs-elliot">Community Engagement</h3>
          <p class="mt-2 text-xl text-gray-600">
          To develop mutually beneficial and lasting relationships with all other
          organizations through sharing a common interest in amateur radio,
          communications, management, and emergency response.
          </p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:bg-blue-100 hover:scale-105">
        <div class="flex justify-center mb-4">
          <img src="{{ asset('images/home/aboutUs/Global.png') }}" alt="Innovation Goal" class="w-16 h-16">
        </div>
        <p class="text-2xl font-bold text-gray-800 fs-elliot">Global Excellence</p>
          <p class="mt-2 text-xl text-gray-600">
          To achieve global excellence, both in understanding, and applying the
          principles of amateur radio.
          </p>
      </div>
    </div>

<section class="bg-white py-12">
  <div class="max-w-6xl mx-auto text-center">
    <div class="flex justify-center mb-4">
      <img src="{{ asset('images/home/aboutUs/Objectives.png') }}" alt="Objectives Logo" class="w-16 h-16">
    </div>
    <h2 class="text-3xl font-extrabold tracking-wider text-[#132080] sm:text-4xl shrikhand-regular">
      OBJECTIVES
    </h2>

    <div class="space-y-6 mt-6">
      @foreach([
        ['title' => 'To Support', 'text' => 'To support targeted communities and/or organizations through strategic programs/partnerships that will improve the amateur radio community through community-driven, globally excellent, and innovative initiatives.', 'image' => 'Support.png'],
        ['title' => 'To Uphold', 'text' => 'To uphold unity among the members of the organization by developing respect, peace, and collaboration.', 'image' => 'Unity.png'],
        ['title' => 'To Establish', 'text' => 'To establish an effective relationship with other organizations for the exploration of amateur radio to achieve global excellence.', 'image' => 'Establish.png'],
        ['title' => 'To Promote', 'text' => 'To promote excellence, proactivity, and social awareness among its members through organizational empowerment, involvement opportunities, and advocacy-centric activities.', 'image' => 'Promote.png'],
      ] as $objective)
      <div class="flex items-center bg-white p-6 rounded-lg shadow-lg hover:shadow-xl hover:bg-blue-100 transition-transform transform hover:scale-105">
        <div class="w-16 h-16 flex-shrink-0">
          <img src="{{ asset('images/home/aboutUs/' . $objective['image']) }}" alt="{{ $objective['title'] }}" class="w-full h-full object-contain">
        </div>
        <div class="ml-6 flex-1 text-left">
          <h4 class="text-2xl font-bold text-gray-900 fs-elliot">{{ $objective['title'] }}</h4>
          <p class="mt-2 text-lg text-gray-600">{{ $objective['text'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


<section class="bg-white py-12">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center">
    <div class="w-full md:w-1/3 flex justify-center mb-6 md:mb-0">
      <img src="{{ asset('images/home/aboutUs/Logo.png') }}" alt="History Logo" class="w-48 h-48 object-contain">
    </div>
    <div class="w-full md:w-2/3 text-center md:text-left px-6">
      <h2 class="text-4xl font-extrabold tracking-wider text-[#132080] shrikhand-regular">
        THE REC Inc. LOGO
      </h2>
        <p class="mt-4 text-xl text-gray-600">
        The official logo of the organization is based on the Smith Chart invented by
        Phillip H. Smith, which is a graphical aid or nomogram designed for electrical and
        electronics engineers specializing in Radio Frequency (RF).
        <br></br>
        The letters R, E, and C, symbolize the acronym of the Organization.
        <br></br>
        The logo, and the organization, shall have blue and white as its official colors,
        symbolizing intelligence and righteousness.
        </p>
    </div>
  </div>
</section>

@endsection