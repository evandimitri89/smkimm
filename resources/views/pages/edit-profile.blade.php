@extends('layouts.main')

@section('title', 'Edit Profile')

@section('content')

  <div class="container-fluid py-4">
    <h1 class="mb-4">Edit Profile</h1>

    <div class="card shadow-sm p-4">
      {{-- Form untuk Update Data. Menggunakan metode POST dengan spoofing PUT --}}
      <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name', $user->name) }}" required>
              @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                name="email" value="{{ old('email', $user->email) }}" required>
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="gender" class="form-label">Gender</label>
              <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender">
                <option value="">Pilih Gender</option>
                <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Laki-laki</option>
                <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Perempuan</option>
              </select>
              @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
              <label for="birth_place" class="form-label">Place of Birth</label>
              <input type="text" class="form-control @error('birth_place') is-invalid @enderror" id="birth_place"
                name="birth_place" value="{{ old('birth_place', $user->birth_place) }}">
              @error('birth_place')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="birth_date" class="form-label">Date of Birth</label>
              <input type="date" class="form-control @error('birth_date') is-invalid @enderror" id="birth_date"
                name="birth_date" value="{{ old('birth_date', $user->birth_date) }}">
              @error('birth_date')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="3">{{ old('address', $user->address) }}</textarea>
              @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>

        <div class="text-end mt-4">
          <a href="{{ route('profile') }}" class="btn btn-secondary me-2">Cancel</a>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>

@endsection
