@extends('layouts.main')

@section('title', 'Teacher Profile')

@section('content')
  <div class="px-6 md:px-10 py-12">

    <h1 class="text-3xl font-semibold text-center mb-12 mt-12">
      Teacher Profile
    </h1>

    <div class="grid md:grid-cols-3 gap-10">

      {{-- LEFT --}}
      <div class="bg-[#1f78c1] rounded-xl p-8 text-white text-center">
        <h2 class="text-xl font-semibold mb-6">
          {{ $teacher->name }}
        </h2>

        <div class="flex justify-center">
          <img src="{{ asset('images/teachers/' . $teacher->photo) }}"
            class="w-48 h-48 rounded-full object-cover border-4 border-white bg-white">
        </div>
      </div>

      {{-- RIGHT --}}
      <div class="md:col-span-2 border-2 border-[#1f78c1] rounded-xl p-8">

        <h3 class="text-lg font-semibold mb-8">
          Bio & other details
        </h3>

        <div class="grid md:grid-cols-2 gap-8">

          <div class="space-y-6">
            <div>
              <p class="text-sm text-gray-500">Gender</p>
              <p class="font-medium">
                {{ $teacher->gender == 'male' ? 'Laki-Laki' : ($teacher->gender == 'female' ? 'Perempuan' : '-') }}</p>
            </div>

            <div>
              <p class="text-sm text-gray-500">Homeroom Teacher</p>
              <p class="font-medium">{{ $teacher->homeroom ?? '-' }}</p>
            </div>

            <div>
              <p class="text-sm text-gray-500">Email</p>
              <p class="font-medium">{{ $teacher->email }}</p>
            </div>
          </div>

          <div class="space-y-6 md:border-l md:pl-8">
            <div>
              <p class="text-sm text-gray-500">Subject</p>
              <p class="font-medium">{{ $teacher->subject }}</p>
            </div>

            <div>
              <p class="text-sm text-gray-500">Major</p>
              <p class="font-medium">Teknik Komputer Jaringan</p>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>
@endsection
