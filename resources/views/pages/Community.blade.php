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

@include('partials.pcommunity', ['images' => $images])

@endsection