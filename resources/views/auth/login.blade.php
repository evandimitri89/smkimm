<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SMK Kristen Immanuel Pontianak</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    body {
      overflow: hidden;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="font-[Montserrat,sans-serif] flex items-center justify-center min-h-screen h-screen w-screen">

  <div class="flex w-screen h-screen bg-white shadow-xl overflow-hidden">

    {{-- Left section (Form) --}}
    <div class="w-full lg:w-1/2 px-12 py-16 flex flex-col justify-center">

      <div class="mb-10">
        <img src="{{ asset('images/homepage/logo.png') }}" alt="Logo" class="h-10 mr-auto">
      </div>

      <h1 class="text-3xl font-bold mb-2 text-gray-800">Back in class, back on track</h1>
      <p class="text-gray-600 mb-8">Please login and pick up where you left off!</p>

      <form method="POST" action="{{ route('login') }}" class="flex-grow flex flex-col justify-center">
        @csrf

        {{-- Email --}}
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required autofocus
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror">
          @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        {{-- Password --}}
        <div class="mb-6">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <div class="relative">
            <input type="password" id="password" name="password" placeholder="Enter your password" required
              class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('password') border-red-500 @enderror">
            <i class="bi bi-eye-fill absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 cursor-pointer toggle-password"
              data-target="#password"></i>
          </div>
          @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        {{-- Remember me & forgot password --}}
        <div class="flex items-center justify-between mb-6">
          <div class="flex items-center">
            <input id="remember" name="remember" type="checkbox"
              class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 mt-1">
            <label for="remember" class="ml-2 block text-sm text-gray-900">
              Keep me logged in
            </label>
          </div>

          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:text-blue-500 font-medium">
              Forgot password?
            </a>
          @endif
        </div>

        {{-- Login button --}}
        <button type="submit"
          class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-150 ease-in-out">
          Log in
        </button>
      </form>

      {{-- Create account link (tetap di bawah form) --}}
      <p class="text-center text-sm text-gray-600 mt-6">
        New here?
        <a href="{{ route('register') }}" class="text-blue-600 font-semibold hover:text-blue-500">
          Create an account!
        </a>
      </p>

      <p class="text-center text-xs text-gray-400 mt-auto pt-6">
        &copy; 2025 Copyright. All rights reserved.
      </p>
    </div>

    {{-- Right section (image) --}}
    <div class="hidden lg:block w-1/2 relative rounded-l-[200px] overflow-hidden">
      <img src="{{ asset('images/homepage/smk.jpg') }}" alt="School Building"
        class="absolute inset-0 w-full h-full object-cover">
    </div>
  </div>

</body>

</html>
