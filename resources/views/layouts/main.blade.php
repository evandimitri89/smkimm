<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="upload-url" content="{{ route('profile.upload') }}">
  <title>{{ $title ?? 'SMK Immanuel Pontianak' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link
    href="https://fonts.googleapis.com/css2?family=Commissioner:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="font-[Montserrat,sans-serif] min-h-screen flex flex-col">

  {{-- Navbar --}}
  @include('partials.navbar')

  {{-- Main content --}}
  <main class="flex-grow">
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('partials.footer')

</body>

</html>
