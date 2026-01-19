<nav class="bg-[#1D7BC5] text-white w-full shadow-md fixed top-0 z-50">
  <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
    <div class="flex items-center space-x-3">
      <img src="{{ asset('images/homepage/logo.png') }}" alt="Logo" class="h-10 w-10 object-contain">
      <div class="leading-tight">
        <h1 class="font-[Commissioner,sans-serif] font-bold text-sm sm:text-base tracking-tight">SMK KRISTEN IMMANUEL
        </h1>
        <p class="font-[Commissioner,sans-serif] font-extrabold text-xl sm:text-xl -mt-1">PONTIANAK</p>
      </div>
    </div>

    <div class="hidden md:flex items-center space-x-8 font-light">
      <a href="{{ route('home') }}"
        class="hover:underline {{ request()->routeIs('home') ? 'font-medium' : '' }}">Home</a>
      <div class="relative group">
        <button class="hover:underline inline-flex items-center">Profile</button>
        <div class="absolute hidden group-hover:block bg-white text-black rounded-lg shadow-lg mt-2 w-44">
          <a href="{{ route('vision.mission') }}" class="block px-4 py-2 hover:bg-gray-100">
            Vision & Mission
          </a>
          <a href="{{ route('teachers') }}" class="block px-4 py-2 hover:bg-gray-100">Teachers & Staff</a>
          <a href="{{ route('facility') }}" class="block px-4 py-2 hover:bg-gray-100">
            Facility
          </a>
        </div>
      </div>
      <a href="#" class="hover:underline">Majors</a>
      <div class="relative group">
        <button class="hover:underline inline-flex items-center">Student Life</button>
        <div class="absolute hidden group-hover:block bg-white text-black rounded-lg shadow-lg mt-2 w-44">
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Activities</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Achievements</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Extracurriculars</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Academic Calendar</a>
        </div>
      </div>
    </div>

    <div class="hidden md:block">
      @guest
        <a href="{{ route('login') }}"
          class="bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold hover:bg-blue-100 transition">Login</a>
      @endguest
      @auth
        @php
          $navProfilePicture =
              Auth::user()->profile_picture && file_exists(public_path(Auth::user()->profile_picture))
                  ? Auth::user()->profile_picture
                  : null;
        @endphp

        <div class="relative group">
          <button
            class="flex items-center justify-center bg-white text-blue-600 rounded-full w-9 h-9 hover:bg-blue-100 transition overflow-hidden">

            @if ($navProfilePicture)
              <img src="{{ asset($navProfilePicture) }}" alt="User Photo" class="w-full h-full object-cover">
            @else
              <i class="bi bi-person-fill text-lg"></i>
            @endif

          </button>

          <div
            class="absolute right-0 hidden group-hover:block bg-white text-black rounded-lg shadow-lg mt-2 w-40 overflow-hidden">
            <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
            </form>
          </div>
        </div>
      @endauth
    </div>

    <button id="menu-btn" class="md:hidden flex items-center justify-center w-10 h-10 focus:outline-none">
      <i class="bi bi-list text-3xl"></i>
    </button>
  </div>

  <div id="mobile-menu"
    class="hidden fixed inset-0 bg-[#1D7BC5] text-white flex flex-col items-center justify-start pt-24 pb-10 space-y-6 text-lg font-light z-40 transition-all duration-300 ease-in-out opacity-0">
    <button id="close-menu" class="absolute top-5 right-6 text-4xl">
      <i class="bi bi-x-lg"></i>
    </button>

    <a href="{{ route('home') }}" class="hover:underline text-center w-full">Home</a>

    <div class="text-center w-full">
      <button class="mobile-submenu-btn flex items-center justify-center space-x-2 w-full">
        <span>Profile</span>
        <i class="bi bi-chevron-down"></i>
      </button>
      <div class="mobile-submenu hidden flex flex-col mt-2 space-y-2 text-base text-center">
        <a href="{{ route('vision.mission') }}" class="hover:underline">Vision & Mission</a>
        <a href="{{ route('teachers') }}" class="hover:underline">Teachers & Staff</a>
        <a href="{{ route('facility') }}" class="hover:underline">Facility</a>
      </div>
    </div>

    <a href="#" class="hover:underline text-center w-full">Majors</a>

    <div class="text-center w-full">
      <button class="mobile-submenu-btn flex items-center justify-center space-x-2 w-full">
        <span>Student Life</span>
        <i class="bi bi-chevron-down"></i>
      </button>
      <div class="mobile-submenu hidden flex flex-col mt-2 space-y-2 text-base text-center">
        <a href="#" class="hover:underline">Activities</a>
        <a href="#" class="hover:underline">Achievements</a>
        <a href="#" class="hover:underline">Extracurriculars</a>
        <a href="#" class="hover:underline">Academic Calendar</a>
      </div>
    </div>

    @guest
      <a href="{{ route('login') }}"
        class="bg-white text-blue-600 px-5 py-2 rounded-lg font-semibold hover:bg-blue-100 transition text-center">Login</a>
    @endguest

    @auth
      <a href="{{ route('profile') }}" class="hover:underline text-center w-full">Profile</a>
      <form method="POST" action="{{ route('logout') }}" class="text-center w-full">
        @csrf
        <button type="submit" class="hover:underline">Logout</button>
      </form>
    @endauth

  </div>
</nav>
