@extends('layouts.main')

@section('title', 'Profile')

@section('content')

  <div class="container mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold mb-6">Profile</h1>

    @if (session('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
      </div>
    @endif

    <div class="bg-white shadow-xl rounded-lg overflow-hidden flex flex-col lg:flex-row">

      <div class="bg-[#1D7BC5] text-white p-6 lg:p-8 flex flex-col items-center lg:w-1/3 xl:w-1/4">

        <div x-data="{ hovering: false }" @mouseenter="hovering = true" @mouseleave="hovering = false"
          class="relative w-36 h-36 rounded-full border-4 border-white overflow-hidden bg-gray-200 cursor-pointer"
          @click="$refs.fileInput.click()">

          @php
            $profilePicturePath =
                $user->profile_picture && file_exists(public_path($user->profile_picture))
                    ? $user->profile_picture
                    : 'images/profile/default.jpeg';
          @endphp

          <img id="profile_image" src="{{ asset($profilePicturePath) }}" alt="Foto Profil"
            class="absolute inset-0 w-full h-full object-cover transition-transform duration-300"
            :class="{ 'scale-105': hovering }">

          <div
            class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-white opacity-0 transition-opacity duration-300"
            :class="{ 'opacity-100': hovering }">

            <i class="bi bi-camera-fill text-3xl mb-1"></i>
            <p class="text-xs">Ganti Foto</p>
          </div>

          <input x-ref="fileInput" type="file" id="profile_picture_upload" accept=".jpg,.jpeg,.png" class="hidden"
            onchange="handleProfilePictureChange(event)">
        </div>






        <h4 class="text-xl font-semibold mb-1 mt-4">{{ $user->name ?? 'Nama Pengguna' }}</h4>
        <p class="text-blue-200 text-sm">{{ $user->role->name ?? 'Student' }}</p>
      </div>

      <div class="flex-grow p-6 lg:p-8 w-full lg:w-2/3 xl:w-3/4">
        <h4 class="text-2xl font-semibold border-b pb-2 mb-6">Bio & other details</h4>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-4">

          <div>
            @include('partials.profile-detail', [
                'label' => 'Gender',
                'value' => $user->gender == 'male' ? 'Laki-laki' : ($user->gender == 'female' ? 'Perempuan' : '-'),
            ])
            @include('partials.profile-detail', [
                'label' => 'Place and Date of Birth',
                'value' =>
                    ($user->birth_place ?? '-') .
                    ', ' .
                    ($user->birth_date ? \Carbon\Carbon::parse($user->birth_date)->format('d F Y') : '-'),
            ])
            @include('partials.profile-detail', ['label' => 'Address', 'value' => $user->address ?? '-'])
            @include('partials.profile-detail', ['label' => 'Email', 'value' => $user->email])
          </div>

          <div>
            @include('partials.profile-detail', ['label' => 'NISN', 'value' => $user->NISN ?? '-'])
            @include('partials.profile-detail', ['label' => 'NIS', 'value' => $user->NIS ?? '-'])
            @include('partials.profile-detail', ['label' => 'Major', 'value' => $user->major->name ?? '-'])
            @include('partials.profile-detail', [
                'label' => 'Class',
                'value' => $user->studentClass->name ?? '-',
            ])
          </div>
        </div>

        <div class="text-right mt-8">
          <a href="{{ route('profile.edit') }}"
            class="bg-[#D50508] hover:bg-red-700 text-white font-bold py-2 px-6 rounded transition duration-150 ease-in-out">
            Edit Data <i class="fas fa-edit ml-2"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

@endsection
