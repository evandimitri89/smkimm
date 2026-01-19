@extends('layouts.main')

@section('title', 'Teachers')

@section('content')

  <div class="px-6 md:px-10 py-10">

    <h1 class="text-3xl font-bold mb-10 text-center">
      Teachers & Staff Members
    </h1>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

      @foreach ($teachers as $teacher)
        <div class="relative overflow-hidden rounded-lg">

          {{-- FOTO FULL --}}
          <div class="w-full h-[340px]">
            <img src="{{ asset('images/teachers/' . $teacher->photo) }}" class="w-full h-full object-cover"
              draggable="false">
          </div>

          {{-- GRADIENT BAWAH --}}
          <div
            class="absolute bottom-0 left-0 w-full h-[140px]
                        bg-gradient-to-t from-black/90 via-black/60 to-transparent">
          </div>

          {{-- TEXT INFO --}}
          <div class="absolute bottom-0 left-0 p-4 text-white w-full">

            <h2 class="text-base font-semibold leading-tight">
              {{ $teacher->name }}
            </h2>

            <p class="text-sm text-gray-200 mt-1">
              {{ $teacher->position }}
            </p>

            @if ($teacher->subject)
              <p class="text-xs text-gray-300 mt-1">
                {{ $teacher->subject }}
              </p>
            @endif

          </div>

        </div>
      @endforeach

    </div>

  </div>

@endsection
