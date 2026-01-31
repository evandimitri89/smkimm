@extends('layouts.main')

@section('title', 'Activities')

@section('content')
  <section class="px-6 md:px-10 py-12 mt-5">

    <h1 class="text-3xl font-bold text-center mb-12 mt-5">
      Our Activities
    </h1>

    <div class="max-w-7xl mx-auto">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        {{-- CARD 1 --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-[220px]">
            <img src="{{ asset('images/activities/kemerdekaan.png') }}" class="w-full h-full object-cover" draggable="false">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold">Hari Kemerdekaan</h3>
            <p class="text-sm text-gray-500 mt-1">19 August 2025</p>
          </div>
        </div>

        {{-- CARD 2 --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-[220px]">
            <img src="{{ asset('images/activities/kemerdekaan.png') }}" class="w-full h-full object-cover"
              draggable="false">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold">MTC</h3>
            <p class="text-sm text-gray-500 mt-1">07 August 2025</p>
          </div>
        </div>

        {{-- CARD 3 --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-[220px]">
            <img src="{{ asset('images/activities/kemerdekaan.png') }}" class="w-full h-full object-cover"
              draggable="false">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold">MPLS 2025</h3>
            <p class="text-sm text-gray-500 mt-1">07 July 2025</p>
          </div>
        </div>

        {{-- CARD 4 --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-[220px]">
            <img src="{{ asset('images/activities/kemerdekaan.png') }}" class="w-full h-full object-cover"
              draggable="false">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold">Classmeeting Genap</h3>
            <p class="text-sm text-gray-500 mt-1">21 June 2025</p>
          </div>
        </div>

        {{-- CARD 5 --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-[220px]">
            <img src="{{ asset('images/activities/kemerdekaan.png') }}" class="w-full h-full object-cover"
              draggable="false">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold">Aksi Sosial 2025</h3>
            <p class="text-sm text-gray-500 mt-1">17 May 2025</p>
          </div>
        </div>

        {{-- CARD 6 --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-[220px]">
            <img src="{{ asset('images/activities/kemerdekaan.png') }}" class="w-full h-full object-cover"
              draggable="false">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold">Pembinaan Karakter</h3>
            <p class="text-sm text-gray-500 mt-1">16 April 2025</p>
          </div>
        </div>

        {{-- CARD 7 --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-[220px]">
            <img src="{{ asset('images/activities/kemerdekaan.png') }}" class="w-full h-full object-cover"
              draggable="false">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold">ImmaFest 2025</h3>
            <p class="text-sm text-gray-500 mt-1">07 February 2025</p>
          </div>
        </div>

        {{-- CARD 8 --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-[220px]">
            <img src="{{ asset('images/activities/kemerdekaan.png') }}" class="w-full h-full object-cover"
              draggable="false">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold">Classmeeting Ganjil</h3>
            <p class="text-sm text-gray-500 mt-1">06 December 2024</p>
          </div>
        </div>

        {{-- CARD 9 --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
          <div class="h-[220px]">
            <img src="{{ asset('images/activities/kemerdekaan.png') }}" class="w-full h-full object-cover"
              draggable="false">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold">Hari Guru 2024</h3>
            <p class="text-sm text-gray-500 mt-1">25 November 2024</p>
          </div>
        </div>

      </div>
    </div>

  </section>
@endsection
