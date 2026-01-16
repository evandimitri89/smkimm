@extends('layouts.main')

@section('title', 'Vision & Mission')

@section('content')

  <div class="container mx-auto py-10 px-4">

    <h1 class="text-3xl font-bold mb-10 text-center">Vision & Mission</h1>

    <div class="max-w-5xl mx-auto space-y-12">

      {{-- Vision Section --}}
      <div>
        <div class="flex justify-center">
          <img src="{{ asset('images/Visi.png') }}" alt="Vision" class="rounded-lg shadow-lg max-w-full h-auto"
            draggable="false">
        </div>
      </div>

      {{-- Mission Section --}}
      <div>
        <div class="flex justify-center">
          <img src="{{ asset('images/Misi.png') }}" alt="Mission" class="rounded-lg shadow-lg max-w-full h-auto"
            draggable="false">
        </div>
      </div>

    </div>

  </div>

@endsection
