@extends('layouts.app')
@section('content')

<section class="relative w-full h-[500px] bg-fixed bg-center bg-cover bg-[url('{{ asset('images/home/events/Events.png') }}')]">
  <div class="absolute inset-0 bg-black bg-opacity-30"></div>
</section>

<!-- INTRODUCTION SECTION -->
<section class="bg-white py-12">
  <div class="max-w-4xl mx-auto text-center">
    <h1 class="text-[#132080] text-4xl font-extrabold tracking-wider sm:text-5xl">
      TOP EVENTS
    </h1>
  </div>
</section>
<!-- END OF INTRODUCTION SECTION -->

@include('partials.Pevents')

@endsection