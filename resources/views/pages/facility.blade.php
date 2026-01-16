@extends('layouts.main')

@section('title', 'Facility')

@section('content')

  <div class="container mx-auto py-10 px-4">

    <h1 class="text-3xl font-bold mb-10 text-center">Facilities</h1>

    {{-- GRID 3 COLUMN --}}
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      {{-- Card 1 --}}
      <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4">
        <img src="{{ asset('images/facility/classroom.png') }}" class="rounded-lg w-full h-40 object-cover mb-3"
          draggable="false">

        <h3 class="font-semibold text-lg mb-1">Computer Laboratory</h3>

        <p class="text-sm text-gray-600">
          Equipped with modern computers and internet access to support learning and practice.
        </p>
      </div>

      {{-- Card 2 --}}
      <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4">
        <img src="{{ asset('images/facility/classroom.png') }}" class="rounded-lg w-full h-40 object-cover mb-3"
          draggable="false">

        <h3 class="font-semibold text-lg mb-1">Library Room</h3>

        <p class="text-sm text-gray-600">
          Comfortable library with various books and study materials for students.
        </p>
      </div>

      {{-- Card 3 --}}
      <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4">
        <img src="{{ asset('images/facility/classroom.png') }}" class="rounded-lg w-full h-40 object-cover mb-3"
          draggable="false">

        <h3 class="font-semibold text-lg mb-1">Science Laboratory</h3>

        <p class="text-sm text-gray-600">
          Laboratory for practical science experiments and student research activities.
        </p>
      </div>

      {{-- Tambah card baru tinggal copy format ini --}}
      {{-- Card 4 --}}
      <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4">
        <img src="{{ asset('images/facility/classroom.png') }}" class="rounded-lg w-full h-40 object-cover mb-3"
          draggable="false">

        <h3 class="font-semibold text-lg mb-1">School Hall</h3>

        <p class="text-sm text-gray-600">
          Multipurpose hall used for events, meetings, and student activities.
        </p>
      </div>

    </div>

  </div>

@endsection
