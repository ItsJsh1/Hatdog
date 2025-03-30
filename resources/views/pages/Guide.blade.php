@extends('layouts.app')
@section('content')
@vite(['resources/css/IApply.css'])

<script src="{{ asset('js/events.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/iApply.css') }}">

<!-- HERO SECTION -->
<section class="relative w-full h-[500px] bg-fixed bg-center bg-cover bg-[url('{{ asset('images/home/guide/Guide.png') }}')]">
  <div class="absolute inset-0 bg-black bg-opacity-30"></div>
</section>

<!-- INTRODUCTION SECTION -->
<section class="bg-white py-12">
  <div class="max-w-4xl mx-auto text-center">
    <img src="{{ asset('images/home/iApply/Tutorial.png') }}" class="mx-auto w-20 h-20" alt="Contact Icon">
          
      <h2 class="text-4xl text-[#132080] font-bold italic mt-2 shrikhand-regular">STEP-BY-STEP TUTORIAL</h2>
      <p class="mt-2 text-gray-600 text-xl fs-elliot">From Start to Finish—We've Got You Covered</p>
  </div>
</section>
<!-- END OF INTRODUCTION SECTION -->

<!-- STEP-BY-STEP TUTORIAL SECTION -->
<section class="bg-white py-16">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row items-center mb-16">
      <div class="flex-shrink-0 w-16 h-16 rounded-full bg-[#132080] flex items-center justify-center text-white text-2xl font-bold mb-4 md:mb-0 md:mr-8">
        1
      </div>
      <div class="flex-1">
        <h2 class="text-2xl font-bold text-[#132080] mb-4 fs-elliot">Step 1: Learn About REC</h2>
        <ul class="text-gray-700 text-lg list-disc list-inside space-y-2">
          <li><strong>Who We Are:</strong> REC Inc. is a community of amateur radio enthusiasts dedicated to enhancing communication skills, fostering camaraderie, and supporting licensing and professional growth.</li>
          <li><strong>Benefits of Joining:</strong>
            <ul class="list-disc list-inside ml-4 space-y-1">
              <li>Access to exclusive training sessions.</li>
              <li>Participate in REC events and activities.</li>
              <li>Be part of a supportive network of professionals and hobbyists.</li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <div class="flex flex-col md:flex-row items-center mb-16">
      <div class="flex-shrink-0 w-16 h-16 rounded-full bg-[#132080] flex items-center justify-center text-white text-2xl font-bold mb-4 md:mb-0 md:mr-8">
        2
      </div>
      <div class="flex-1">
        <h2 class="text-2xl font-bold text-[#132080] mb-4 fs-elliot">Step 2: Prepare Your Documents</h2>
        <p class="text-gray-700 text-lg mb-4">Make sure you have the following documents ready:</p>
        <ul class="text-gray-700 text-lg list-disc list-inside space-y-2">
          <li>A valid ID (government-issued or school ID).</li>
          <li>Proof of address or residency.</li>
          <li>Membership fee payment receipt (if applicable).</li>
        </ul>
        <p class="text-gray-700 mt-4"><strong>Guidelines for Uploads:</strong></p>
        <ul class="text-gray-700 list-disc list-inside space-y-2">
          <li>Accepted formats: PDF, JPG, or PNG.</li>
          <li>File size limit: 5MB per document.</li>
        </ul>
      </div>
    </div>

    <div class="flex flex-col md:flex-row items-center mb-16">
      <div class="flex-shrink-0 w-16 h-16 rounded-full bg-[#132080] flex items-center justify-center text-white text-2xl font-bold mb-4 md:mb-0 md:mr-8">
        3
      </div>
      <div class="flex-1">
        <h2 class="text-2xl font-bold text-[#132080] mb-4 fs-elliot">Step 3: Fill Out the Application Form</h2>
        <ul class="text-gray-700 text-lg list-disc list-inside space-y-2">
          <li>To apply, complete the REC Application Form. You can choose either:</li>
          <ul class="list-disc list-inside ml-4 space-y-1">
            <li><strong>Online Form:</strong> [Link to Form] (Submit instantly).</li>
            <li><strong>Downloadable Form:</strong> [Link to PDF/DOCX] (Fill out offline and submit via email or in person).</li>
          </ul>
        </ul>
      </div>
    </div>

    <div class="flex flex-col md:flex-row items-center mb-16">
      <div class="flex-shrink-0 w-16 h-16 rounded-full bg-[#132080] flex items-center justify-center text-white text-2xl font-bold mb-4 md:mb-0 md:mr-8">
        4
      </div>
      <div class="flex-1">
        <h2 class="text-2xl font-bold text-[#132080] mb-4 fs-elliot">Step 4: Schedule Your Interview or Betting</h2>
        <p class="text-gray-700 text-lg mb-4">The betting process ensures applicants understand REC's values and allows for a personal welcome.</p>
        <ul class="text-gray-700 text-lg list-disc list-inside space-y-2">
          <li><strong>Schedule Your Interview:</strong></li>
          <ul class="list-disc list-inside ml-4 space-y-1">
            <li><strong>Location:</strong> REC Inc. Main Office or via Zoom</li>
            <li>Be familiar with REC bylaws or values.</li>
            <li>Prepare required documents for verification.</li>
          </ul>
        </ul>
      </div>
    </div>

    <div class="flex flex-col md:flex-row items-center mb-16">
      <div class="flex-shrink-0 w-16 h-16 rounded-full bg-[#132080] flex items-center justify-center text-white text-2xl font-bold mb-4 md:mb-0 md:mr-8">
        5
      </div>
      <div class="flex-1">
        <h2 class="text-2xl font-bold text-[#132080] mb-4 fs-elliot">Step 5: Submit Payment</h2>
        <p class="text-gray-700 text-lg mb-4">After approval, finalize your application by paying the membership fee:</p>
            <ul class="text-gray-700 text-lg list-disc list-inside space-y-2">
              <li>PXXX for regular members, free for students.</li>
              <li>Payments are accepted via GCash, PayPal, bank transfer, or in-person cash.</li>
            </ul>
          <p class="text-gray-700 mt-4">Submit proof of payment through the application form or email it (with your name, application ID, and receipt) to [REC Payment Email].</p>
      </div>
    </div>

    <div class="flex flex-col md:flex-row items-center mb-16">
      <div class="flex-shrink-0 w-16 h-16 rounded-full bg-[#132080] flex items-center justify-center text-white text-2xl font-bold mb-4 md:mb-0 md:mr-8">
        6
      </div>
      <div class="flex-1">
        <h2 class="text-2xl font-bold text-[#132080] mb-4 fs-elliot">Step 6: Wait for Confirmation</h2>
        <p class="text-gray-700 text-lg mb-4">Your application will be reviewed within 3–5 business days. Approved applicants will receive:</p>
        <ul class="text-gray-700 text-lg list-disc list-inside space-y-2">
          <li>A confirmation email.</li>
          <li>Details about their membership ID.</li>
          <li>Instructions for next steps.</li>
        </ul>
      </div>
    </div>


    <div class="flex flex-col md:flex-row items-center mb-16">
      <div class="flex-shrink-0 w-16 h-16 rounded-full bg-[#132080] flex items-center justify-center text-white text-2xl font-bold mb-4 md:mb-0 md:mr-8">
        7
      </div>
      <div class="flex-1">
        <h2 class="text-2xl font-bold text-[#132080] mb-4 fs-elliot">Step 7: Attend the Orientation</h2>
        <p class="text-gray-700 text-lg mb-4">New members are encouraged to join an optional orientation session where they will:</p>
        <ul class="text-gray-700 text-lg list-disc list-inside space-y-2">
          <li>Learn more about REC operations and activities.</li>
          <li>Meet fellow members and mentors.</li>
        </ul>
        <p class="text-gray-700 mt-4">Orientation schedules will be provided after confirmation.</p>
      </div>
    </div>
  </div>

  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-8">
    <a href="#" class="inline-block bg-[#132080] text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-[#5E6FFB] transition duration-300 fs-elliot">
      Go to RecApply
    </a>
  </div>
</section>
<!-- END OF STEP-BY-STEP TUTORIAL SECTION -->

@endsection