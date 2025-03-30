@extends('layouts.app')
@section('content')
@vite(['resources/css/membershipInfo.css'])

<!-- Add Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- HERO SECTION -->
<section class="relative w-full h-[500px] bg-fixed bg-center bg-cover bg-[url('{{ asset('images/home/membershipInfo/membershipInfo.png') }}')]">
  <div class="absolute inset-0 bg-black bg-opacity-30"></div>
</section>

<!-- MEMBERSHIP BENEFITS SECTION -->
<section class="bg-white py-16">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-center mb-6">
    </div>
    <h2 class="text-3xl font-bold text-[#132080] text-center mb-4 shrikhand-regular">
      <i class="fas fa-star mr-2"></i> Membership Benefits
    </h2>
    <p class="text-xl text-gray-600  text-center max-w-2xl mx-auto mb-12">
      Explore the exclusive benefits of becoming a member of our community. Enjoy access to events, resources, and more!
    </p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out hover:bg-[#5E6FFB] group">
        <div class="text-[#132080] text-4xl font-bold mb-4 group-hover:text-white">01</div>
        <h3 class="text-2xl font-bold text-[#132080] mb-4 group-hover:text-white">Exclusive Events</h3>
        <p class="text-xl text-gray-600 group-hover:text-white">
          Access to members-only events, workshops, and networking opportunities.
        </p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out hover:bg-[#5E6FFB] group">
        <div class="text-[#132080] text-4xl font-bold mb-4 group-hover:text-white">02</div>
        <h3 class="text-2xl font-bold text-[#132080] mb-4 group-hover:text-white">Training Resources</h3>
        <p class="text-xl text-gray-600 group-hover:text-white">
          Free access to premium training materials, tutorials, and guides.
        </p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out hover:bg-[#5E6FFB] group">
        <div class="text-[#132080] text-4xl font-bold mb-4 group-hover:text-white">03</div>
        <h3 class="text-2xl font-bold text-[#132080] mb-4 group-hover:text-white">Community Support</h3>
        <p class="text-xl text-gray-600 group-hover:text-white">
          Join a vibrant community of like-minded individuals and experts.
        </p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out hover:bg-[#5E6FFB] group">
        <div class="text-[#132080] text-4xl font-bold mb-4 group-hover:text-white">04</div>
        <h3 class="text-2xl font-bold text-[#132080] mb-4 group-hover:text-white">Discounts & Offers</h3>
        <p class="text-xl text-gray-600 group-hover:text-white">
          Enjoy exclusive discounts on events, merchandise, and partner services.
        </p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out hover:bg-[#5E6FFB] group">
        <div class="text-[#132080] text-4xl font-bold mb-4 group-hover:text-white">05</div>
        <h3 class="text-2xl font-bold text-[#132080] mb-4 group-hover:text-white">Certification</h3>
        <p class="text-xl text-gray-600 group-hover:text-white">
          Receive official certification and recognition for your achievements.
        </p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out hover:bg-[#5E6FFB] group">
        <div class="text-[#132080] text-4xl font-bold mb-4 group-hover:text-white">06</div>
        <h3 class="text-2xl font-bold text-[#132080] mb-4 group-hover:text-white">Mentorship</h3>
        <p class="text-xl text-gray-600 group-hover:text-white">
          Get guidance and mentorship from industry professionals.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- END OF MEMBERSHIP BENEFITS SECTION -->

<!-- MEMBERSHIP INFORMATION SECTION -->
<section class="bg-white py-16">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-center mb-6">
    </div>
    <h2 class="text-3xl font-bold text-[#132080] text-center mb-4 shrikhand-regular">
      <i class="fas fa-clipboard-list mr-2"></i> Membership Requirements
    </h2>
    <p class="text-xl text-gray-600 text-center max-w-2xl mx-auto mb-12">
      Learn how to join our community and explore our flexible membership plans tailored to suit your needs.
    </p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out hover:bg-[#5E6FFB] group">
        <h3 class="text-2xl font-bold text-[#132080] mb-4 group-hover:text-white">Requirements</h3>
        <p class="text-xl text-gray-600 mb-4 group-hover:text-white">
          Becoming a member is easy! Simply fill out the application form and pay the membership fee.
        </p>
        <ul class="list-disc list-inside text-xl text-gray-600 group-hover:text-white">
          <li>Fill out the online application form.</li>
          <li>Pay the membership fee via our secure payment gateway.</li>
          <li>Wait for confirmation and welcome email.</li>
        </ul>
      </div>

      <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out hover:bg-[#5E6FFB] group">
        <h3 class="text-2xl font-bold text-[#132080] mb-4 group-hover:text-white">Membership Fees</h3>
        <p class="text-xl text-gray-600 mb-4 group-hover:text-white">
          We offer flexible membership plans to suit your needs:
        </p>
        <ul class="list-disc list-inside text-xl text-gray-600 group-hover:text-white">
          <li>Student Membership: Free</li>
          <li>Regular Membership: Php 200 (one-time payment)</li>
          <li>Associate Membership: Php 500 (yearly payment)</li>
        </ul>
      </div>
    </div>

    <div class="text-center mt-12">
      <a href="http://127.0.0.1:8000/StudentApplicationForm" class="inline-block bg-[#132080] text-white px-8 py-3 rounded-lg text-xl font-semibold hover:bg-[#5E6FFB] transform hover:scale-105 transition-all duration-300 ease-in-out">
        <i class="fas fa-paper-plane mr-2"></i> APPLY FOR MEMBERSHIP
      </a>
    </div>
  </div>
</section>
<!-- END OF MEMBERSHIP INFORMATION SECTION -->

@endsection