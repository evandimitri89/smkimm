<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - SMK Kristen Immanuel Pontianak</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    body {
      overflow: hidden;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="font-[Montserrat,sans-serif] flex items-center justify-center min-h-screen h-screen w-screen">
  <div class="flex flex-row-reverse w-screen h-screen bg-white overflow-hidden">
    <div class="w-full lg:w-1/2 px-12 py-16 flex flex-col justify-center">
      <div class="flex justify-between items-center mb-10">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
        <p class="text-sm text-gray-600">
          Already have an account? <a href="{{ route('login') }}"
            class="text-blue-600 font-semibold hover:text-blue-500">Log in now</a>
        </p>
      </div>
      <h1 class="text-3xl font-bold mb-2 text-gray-800">Let's get started</h1>
      <p class="text-gray-600 mb-8">Connect with your teachers and classmates</p>
      <form method="POST" action="{{ route('register') }}" class="flex-grow flex flex-col justify-center">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required autofocus
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror">
          @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror">
          @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <div class="relative">
            <input type="password" id="password" name="password" placeholder="Enter your password" required
              class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <i class="bi bi-eye-fill absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 cursor-pointer toggle-password"
              data-target="#password"></i>
          </div>
        </div>

        <div class="mb-6">
          <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Password
            Confirmation</label>
          <div class="relative">
            <input type="password" id="password_confirmation" name="password_confirmation"
              placeholder="Confirm your password" required
              class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <i class="bi bi-eye-fill absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 cursor-pointer toggle-password"
              data-target="#password_confirmation"></i>
          </div>
        </div>


        <div class="mb-8">
          <div class="flex items-start">
            <input id="terms" name="terms" type="checkbox" required
              class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 mt-1">
            <label for="terms" class="ml-2 block text-sm text-gray-900 leading-tight">
              I agree to the <a href="#" class="text-blue-600 font-medium hover:text-blue-500">Terms of
                Service</a> and <a href="#" class="text-blue-600 font-medium hover:text-blue-500">Privacy
                Policy</a>
            </label>
          </div>
        </div>

        <button type="submit"
          class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-150 ease-in-out">
          Register
        </button>
      </form>

      <p class="text-center text-xs text-gray-400 mt-auto pt-6">
        &copy; 2025 Copyright. All rights reserved.
      </p>

    </div>

    <div class="hidden lg:block w-1/2 relative rounded-r-[100px] overflow-hidden">
      <img src="{{ asset('images/smk.jpg') }}" alt="School Building"
        class="absolute inset-0 w-full h-full object-cover">
    </div>
  </div>
</body>

</html>
