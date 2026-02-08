@extends('layouts.main')

@section('title', 'Achievements')

@section('content')

  <section class="px-6 md:px-10 py-12">

    <h1 class="text-3xl font-bold text-center mb-14">
      Our Achievements
    </h1>

    <div class="max-w-7xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

        {{-- ACHIEVEMENT 1 --}}
        <div class="rounded-xl overflow-hidden shadow-md">
          <img src="{{ asset('images/achievements/muspus.jpg') }}" class="w-full h-[260px] object-cover" draggable="false">
        </div>

        {{-- ACHIEVEMENT 2 --}}
        <div class="rounded-xl overflow-hidden shadow-md">
          <img src="{{ asset('images/achievements/muspus.jpg') }}" class="w-full h-[260px] object-cover" draggable="false">
        </div>

        {{-- ACHIEVEMENT 3 --}}
        <div class="rounded-xl overflow-hidden shadow-md">
          <img src="{{ asset('images/achievements/muspus.jpg') }}" class="w-full h-[260px] object-cover"
            draggable="false">
        </div>

        {{-- ACHIEVEMENT 4 --}}
        <div class="rounded-xl overflow-hidden shadow-md">
          <img src="{{ asset('images/achievements/muspus.jpg') }}" class="w-full h-[260px] object-cover"
            draggable="false">
        </div>

        {{-- ACHIEVEMENT 5 --}}
        <div class="rounded-xl overflow-hidden shadow-md">
          <img src="{{ asset('images/achievements/muspus.jpg') }}" class="w-full h-[260px] object-cover"
            draggable="false">
        </div>

        {{-- ACHIEVEMENT 6 --}}
        <div class="rounded-xl overflow-hidden shadow-md">
          <img src="{{ asset('images/achievements/muspus.jpg') }}" class="w-full h-[260px] object-cover"
            draggable="false">
        </div>

      </div>
    </div>

  </section>

@endsection
