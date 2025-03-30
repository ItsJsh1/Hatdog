@extends('layouts.app')
@section('content')
@vite(['resources/css/studentMembers.css'])
@vite(['resources/js/studentMembers.js'])

<!-- HERO SECTION -->
<section class="relative w-full h-[500px] bg-fixed bg-center bg-cover bg-[url('{{ asset('images/home/studentMembership/StudentMembership.png') }}')]">
  <div class="absolute inset-0 bg-black bg-opacity-30"></div>
</section>

<!-- INTRODUCTION SECTION -->
<section class="bg-white py-12">
  <div class="max-w-4xl mx-auto text-center">
    <h1 class="text-[#132080] text-4xl font-extrabold tracking-wider sm:text-5xl shrikhand-regular">
      STUDENT MEMBERS
    </h1>
    <p class="mt-6 text-xl leading-7 text-gray-600">
    The Radio Engineering Circle, Inc. (REC) is committed to fostering the next generation of amateur radio enthusiasts through its Student Membership program. 
    As a student member, you will have the opportunity to learn, grow, and connect with like-minded individuals who share a passion for radio engineering and communication. 
    Our program is designed to provide students with hands-on experience, mentorship, and access to resources that will help them excel in the field of amateur radio. 
    Join us in building a community of innovation, collaboration, and lifelong learning.
    </p>
  </div>
</section>
<!-- END OF INTRODUCTION SECTION -->

<!-- MEMBERS TABLE SECTION -->
<section class="bg-white py-16">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mb-8">
      <input
        type="text"
        id="searchInput"
        placeholder="Search by Name, Callsign, or Club..."
        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#132080] focus:border-transparent"
      />
    </div>

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
      <div class="flex flex-wrap gap-4">
        <label class="flex items-center space-x-2">
          <input type="checkbox" id="toggleRecNum" checked class="form-checkbox h-5 w-5 text-[#132080]">
          <span class="text-gray-700 text-xl fs-elliot">REC #</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="checkbox" id="toggleRecName" checked class="form-checkbox h-5 w-5 text-[#132080]">
          <span class="text-gray-700 text-xl fs-elliot">Name</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="checkbox" id="toggleCallsign" checked class="form-checkbox h-5 w-5 text-[#132080]">
          <span class="text-gray-700 text-xl fs-elliot">Callsign</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="checkbox" id="toggleRegion" checked class="form-checkbox h-5 w-5 text-[#132080]">
          <span class="text-gray-700 text-xl fs-elliot">Region</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="checkbox" id="toggleSection" checked class="form-checkbox h-5 w-5 text-[#132080]">
          <span class="text-gray-700 text-xl fs-elliot">Section</span>
        </label>
      </div>

      <div class="flex gap-4">
        <a href="#" class="bg-[#132080] text-white px-6 py-2 rounded-lg text-lg font-semibold hover:bg-[#5E6FFB] transition duration-300">
          Apply Membership
        </a>
        <a href="#" class="bg-[#132080] text-white px-6 py-2 rounded-lg text-lg font-semibold hover:bg-[#5E6FFB] transition duration-300">
          Report a Problem
        </a>
      </div>
    </div>

    <div class="overflow-x-auto bg-white rounded-lg shadow-lg">
      <table class="min-w-full" id="membersTable">
        <thead class="bg-[#132080] text-white">
          <tr>
            <th class="px-6 py-4 text-left text-xl font-semibold uppercase toggle-column border-r border-white fs-elliot" data-column="0">REC #</th>
            <th class="px-6 py-4 text-left text-xl font-semibold uppercase toggle-column border-r border-white fs-elliot" data-column="1">Name</th>
            <th class="px-6 py-4 text-left text-xl font-semibold uppercase toggle-column border-r border-white fs-elliot" data-column="2">Callsign</th>
            <th class="px-6 py-4 text-left text-xl font-semibold uppercase toggle-column border-r border-white fs-elliot" data-column="3">REGION</th>
            <th class="px-6 py-4 text-left text-xl font-semibold uppercase toggle-column border-r border-white fs-elliot" data-column="4">SECTION</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr class="hover:bg-[#5E6FFB] text-gray-700 hover:text-white transition-all duration-300 ease-in-">
            <td class="px-6 py-4 text-lg toggle-column" data-column="0">REC #</td>
            <td class="px-6 py-4 text-lg hover:scale-110 toggle-column" data-column="1">Member Name</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="2">Member Callsign</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="3">Region</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="4">Section</td>
          </tr>
          <tr class="hover:bg-[#5E6FFB] text-gray-700 hover:text-white transition-all duration-300 ease-in-">
            <td class="px-6 py-4 text-lg toggle-column" data-column="0">REC #</td>
            <td class="px-6 py-4 text-lg hover:scale-110 toggle-column" data-column="1">Member Name</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="2">Member Callsign</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="3">Region</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="4">Section</td>
          </tr>
          <tr class="hover:bg-[#5E6FFB] text-gray-700 hover:text-white transition-all duration-300 ease-in-">
            <td class="px-6 py-4 text-lg toggle-column" data-column="0">REC #</td>
            <td class="px-6 py-4 text-lg hover:scale-110 toggle-column" data-column="1">Member Name</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="2">Member Callsign</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="3">Region</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="4">Section</td>
          </tr>
          <tr class="hover:bg-[#5E6FFB] text-gray-700 hover:text-white transition-all duration-300 ease-in-">
            <td class="px-6 py-4 text-lg toggle-column" data-column="0">REC #</td>
            <td class="px-6 py-4 text-lg hover:scale-110 toggle-column" data-column="1">Member Name</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="2">Member Callsign</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="3">Region</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="4">Section</td>
          </tr>
          <tr class="hover:bg-[#5E6FFB] text-gray-700 hover:text-white transition-all duration-300 ease-in-">
            <td class="px-6 py-4 text-lg toggle-column" data-column="0">REC #</td>
            <td class="px-6 py-4 text-lg hover:scale-110 toggle-column" data-column="1">Member Name</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="2">Member Callsign</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="3">Region</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="4">Section</td>
          </tr>
          <tr class="hover:bg-[#5E6FFB] text-gray-700 hover:text-white transition-all duration-300 ease-in-">
            <td class="px-6 py-4 text-lg toggle-column" data-column="0">REC #</td>
            <td class="px-6 py-4 text-lg hover:scale-110 toggle-column" data-column="1">Member Name</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="2">Member Callsign</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="3">Region</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="4">Section</td>
          </tr>
          <tr class="hover:bg-[#5E6FFB] text-gray-700 hover:text-white transition-all duration-300 ease-in-">
            <td class="px-6 py-4 text-lg toggle-column" data-column="0">REC #</td>
            <td class="px-6 py-4 text-lg hover:scale-110 toggle-column" data-column="1">Member Name</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="2">Member Callsign</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="3">Region</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="4">Section</td>
          </tr>
          <tr class="hover:bg-[#5E6FFB] text-gray-700 hover:text-white transition-all duration-300 ease-in-">
            <td class="px-6 py-4 text-lg toggle-column" data-column="0">REC #</td>
            <td class="px-6 py-4 text-lg hover:scale-110 toggle-column" data-column="1">Member Name</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="2">Member Callsign</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="3">Region</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="4">Section</td>
          </tr>
          <tr class="hover:bg-[#5E6FFB] text-gray-700 hover:text-white transition-all duration-300 ease-in-">
            <td class="px-6 py-4 text-lg toggle-column" data-column="0">REC #</td>
            <td class="px-6 py-4 text-lg hover:scale-110 toggle-column" data-column="1">Member Name</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="2">Member Callsign</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="3">Region</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="4">Section</td>
          </tr>
          <tr class="hover:bg-[#5E6FFB] text-gray-700 hover:text-white transition-all duration-300 ease-in-">
            <td class="px-6 py-4 text-lg toggle-column" data-column="0">REC #</td>
            <td class="px-6 py-4 text-lg hover:scale-110 toggle-column" data-column="1">Member Name</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="2">Member Callsign</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="3">Region</td>
            <td class="px-6 py-4 text-lg toggle-column" data-column="4">Section</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
<!-- END OF MEMBERS TABLE SECTION -->
@endsection