@extends('layouts.main')

@section('title', 'Edit Profile')

@section('content')

  <div class="max-w-5xl mx-auto py-10 px-4">

    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl md:text-3xl font-bold text-gray-800">
        Edit Profile
      </h1>

      <a href="{{ route('profile') }}"
        class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition">
        <i class="bi bi-arrow-left mr-2"></i>
        Back
      </a>
    </div>

    <div class="bg-white shadow-lg rounded-2xl overflow-hidden">

      <div class="bg-[#1D7BC5] text-white px-6 py-4">
        <h2 class="text-lg font-semibold flex items-center">
          <i class="bi bi-person-gear mr-2"></i>
          Update Your Profile Information
        </h2>
      </div>

      <div class="p-6 md:p-8">

        <form action="{{ route('profile.update') }}" method="POST">
          @csrf
          @method('PUT')

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- Name --}}
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">
                Name
              </label>

              <input type="text" name="name" value="{{ old('name', $user->name) }}"
                class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none @error('name') border-red-500 @enderror"
                required>

              @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>

            {{-- Email --}}
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">
                Email
              </label>

              <input type="email" name="email" value="{{ old('email', $user->email) }}"
                class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none @error('email') border-red-500 @enderror"
                required>

              @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>

            {{-- Gender --}}
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">
                Gender
              </label>

              <select name="gender"
                class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none @error('gender') border-red-500 @enderror">
                <option value="">Select Gender</option>
                <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Laki-laki</option>
                <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Perempuan</option>
              </select>

              @error('gender')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>

            {{-- Birth Place --}}
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">
                Place of Birth
              </label>

              <input type="text" name="birth_place" value="{{ old('birth_place', $user->birth_place) }}"
                class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none @error('birth_place') border-red-500 @enderror">

              @error('birth_place')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>

            {{-- Birth Date --}}
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">
                Date of Birth
              </label>

              <input type="date" name="birth_date" value="{{ old('birth_date', $user->birth_date) }}"
                class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none @error('birth_date') border-red-500 @enderror">

              @error('birth_date')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>

            {{-- Address --}}
            <div class="md:col-span-2">
              <label class="block text-sm font-semibold text-gray-700 mb-2">
                Address
              </label>

              <textarea name="address" rows="3"
                class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none @error('address') border-red-500 @enderror">{{ old('address', $user->address) }}</textarea>

              @error('address')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
            </div>

          </div>

          {{-- Action Buttons --}}
          <div class="flex justify-end space-x-3 mt-8 border-t pt-5">

            <a href="{{ route('profile') }}"
              class="px-5 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded-lg transition">
              Cancel
            </a>

            <button type="submit"
              class="px-6 py-2 bg-[#1D7BC5] hover:bg-blue-700 text-white font-semibold rounded-lg transition">
              Save Changes
            </button>

          </div>

        </form>

      </div>
    </div>

  </div>

@endsection
