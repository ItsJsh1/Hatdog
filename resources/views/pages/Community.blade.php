@extends('layouts.app')
@section('content')
@vite(['resources/css/community.css'])

<section class="relative w-full h-[500px] bg-fixed bg-center bg-cover bg-[url('{{ asset('images/home/community/OurCom.png') }}')]">
  <div class="absolute inset-0 bg-black bg-opacity-30"></div>
</section>

<section class="bg-white py-12">
  <div class="max-w-4xl mx-auto text-center p-8 rounded-lg">
    <div class="flex justify-center mb-4">
      <img src="{{ asset('images/home/community/ComUnity.png') }}" alt="REC Logo" class="w-20 h-20">
    </div>
        <h1 class="text-3xl font-extrabold tracking-wider text-[#132080] sm:text-4xl shrikhand-regular">
        KA-CIRCLES
        </h1>
            <p class="mt-2 text-2xl leading-7 text-gray-600">
            At Radio Engineering Circle Inc, we bring people together to connect, share, and grow. Our platform is
            designed to foster meaningful interactions, provide valuable resources, and create a supportive
            space for members to engage in discussions, events, and collaborations.
            </p>
    </div>
</section>

<section class="py-12 bg-white border-divider">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <div class="space-y-6">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community1.jpg') }}" alt="Community 1">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community2.jpg') }}" alt="Community 2">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community3.jpg') }}" alt="Community 3">
      </div>

      <div class="space-y-6">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community4.jpg') }}" alt="Community 4">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community5.jpg') }}" alt="Community 5">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community6.jpg') }}" alt="Community 6">
      </div>

      <div class="space-y-6">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community7.jpg') }}" alt="Community 7">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community8.jpg') }}" alt="Community 8">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community9.jpg') }}" alt="Community 9">
      </div>

      <div class="space-y-6">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community10.jpg') }}" alt="Community 10">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community11.jpg') }}" alt="Community 11">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community12.jpg') }}" alt="Community 12">
      </div>

      <div class="space-y-6">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community10.jpg') }}" alt="Community 10">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community11.jpg') }}" alt="Community 11">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community12.jpg') }}" alt="Community 12">
      </div>

      <div class="space-y-6">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community7.jpg') }}" alt="Community 7">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community8.jpg') }}" alt="Community 8">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community9.jpg') }}" alt="Community 9">
      </div>

      <div class="space-y-6">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community10.jpg') }}" alt="Community 10">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community11.jpg') }}" alt="Community 11">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community12.jpg') }}" alt="Community 12">
      </div>

      <div class="space-y-6">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community7.jpg') }}" alt="Community 7">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community8.jpg') }}" alt="Community 8">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community9.jpg') }}" alt="Community 9">
      </div>

      <div class="space-y-6">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community7.jpg') }}" alt="Community 7">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community8.jpg') }}" alt="Community 8">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community9.jpg') }}" alt="Community 9">
      </div>

      <div class="space-y-6">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community10.jpg') }}" alt="Community 10">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community11.jpg') }}" alt="Community 11">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community12.jpg') }}" alt="Community 12">
      </div>

      <div class="space-y-6">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community7.jpg') }}" alt="Community 7">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community8.jpg') }}" alt="Community 8">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community9.jpg') }}" alt="Community 9">
      </div>

      <div class="space-y-6">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community10.jpg') }}" alt="Community 10">
        <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community11.jpg') }}" alt="Community 11">
        <img class="w-full h-64 object-cover rounded-lg" src="{{ asset('images/home/gallery/Community12.jpg') }}" alt="Community 12">
      </div>
      

    </div>
  </div>
</section>

@endsection