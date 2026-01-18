@extends('layouts.main')

@section('title', 'Welcome | SMK Immanuel Pontianak')

@section('content')
  {{-- Hero Section --}}
  <section class="relative w-full h-screen flex items-center justify-start text-white overflow-hidden">
    <!-- Background Image -->
    <img src="{{ asset('images/homepage/smk_homepage.png') }}" alt="SMK Kristen Immanuel"
      class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay -->
    <div class="absolute inset-0"></div>

    <!-- Text Container -->
    <div class="relative z-10 pl-10 max-w-2xl space-y-4">
      <div class="hero-text opacity-100 transition-opacity duration-1000">
        <p class="text-yellow-400 font-semibold tracking-wider">SCHOOL FOR EVERYONE</p>
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
          YOUR PATH TO CAREER SUCCESS STARTS HERE
        </h1>
        <p class="text-sm md:text-base leading-relaxed">
          SMK Immanuel membuka jalan menuju masa depan yang cerah dengan pendidikan vokasi unggulan.
          Kami membekali siswa dengan kompetensi akademik, keterampilan praktis, dan karakter yang kuat.
        </p>
      </div>

      <div class="hero-text opacity-0 absolute top-0 transition-opacity duration-1000">
        <p class="text-yellow-400 font-semibold tracking-wider">SCHOOL FOR EVERYONE</p>
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
          GEAR UP TO TURN KNOWLEDGE INTO ACTION
        </h1>
        <p class="text-sm md:text-base leading-relaxed">
          Di sini, belajar bukan sekadar teori. Melalui praktik langsung, pengalaman industri,
          dan pembelajaran berbasis proyek, siswa dilatih untuk mengubah pengetahuan menjadi keterampilan nyata.
        </p>
      </div>

      <div class="hero-text opacity-0 absolute top-0 transition-opacity duration-1000">
        <p class="text-yellow-400 font-semibold tracking-wider">SCHOOL FOR EVERYONE</p>
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
          BUILD CHARACTER AND CONFIDENCE FOR THE FUTURE
        </h1>
        <p class="text-sm md:text-base leading-relaxed">
          Kami menanamkan nilai integritas, kerja keras, dan kepercayaan diri agar siswa siap menghadapi dunia kerja
          modern.
        </p>
      </div>
    </div>
  </section>




  {{-- Motto --}}
  <section class="bg-white py-16 px-6 md:px-10">
    <div class="max-w-6xl mx-auto text-center">
      <!-- Title -->
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-10">
        Smart. Wise. Accountable.
      </h2>

      <!-- Image Grid -->
      <div class="grid md:grid-cols-2 gap-6 items-center">
        <!-- Large Image (left) -->
        <div class="rounded-2xl overflow-hidden shadow-lg">
          <img src="{{ asset('images/homepage/paskibra.jpg') }}" alt="Upacara SMK Kristen Immanuel"
            class="w-full h-124 object-cover hover:scale-105 transition-transform duration-700 ease-in-out">
        </div>

        <!-- Two Slightly Taller Images (right) -->
        <div class="grid grid-rows-2 gap-6">
          <div class="rounded-2xl overflow-hidden shadow-lg">
            <img src="{{ asset('images/homepage/osis.jpg') }}" alt="Kegiatan Belajar SMK Kristen Immanuel"
              class="w-full h-52 md:h-64 object-cover hover:scale-105 transition-transform duration-700 ease-in-out">
          </div>
          <div class="rounded-2xl overflow-hidden shadow-lg">
            <img src="{{ asset('images/homepage/hari_guru.jpg') }}" alt="Acara Sekolah SMK Kristen Immanuel"
              class="w-full h-52 md:h-64 object-cover hover:scale-105 transition-transform duration-700 ease-in-out object-bottom">
          </div>
        </div>
      </div>
    </div>
  </section>



  {{-- Who We Are --}}
  <section id="about" class="max-w-6xl mx-auto px-6 my-20">
    <div class="md:flex md:items-center md:space-x-10">
      <div class="relative w-full md:w-1/2 mb-8 md:mb-0 group">
        <div
          class="absolute -bottom-6 left-6 right-6 h-6 bg-gray-300/30 rounded-3xl blur-md transform scale-x-95 transition-all duration-700 ease-out group-hover:scale-x-100 group-hover:bg-gray-400/40">
        </div>
        <img src="{{ asset('images/homepage/smk.jpg') }}" alt="SMK Kristen Immanuel"
          class="relative w-full rounded-3xl shadow-xl shadow-blue-900/30 border border-white/20
              transition-all duration-700 ease-[cubic-bezier(0.4,0,0.2,1)]
              group-hover:-translate-y-3 group-hover:shadow-2xl group-hover:shadow-blue-800/40 group-hover:brightness-105">
      </div>

      <div class="md:w-1/2">
        <h1 class="text-3xl font-bold text-[#1D7BC5] drop-shadow-md mb-4">Who Are We?</h1>
        <p class="text-gray-600 leading-relaxed mb-4">
          SMK Kristen Immanuel berdiri pada tahun 1988 dengan ijin operasional No. 97/Kep/1988 di lokasi yang sama dengan
          SMP Kristen Immanuel di Jl. Letjen Sutoyo, Kota Pontianak. Unit sekolah ini memiliki 3 jurusan, yaitu Akuntansi,
          Pemasaran, dan Teknik Komputer & Jaringan.
        </p>
        <p class="text-gray-600 leading-relaxed mb-4">
          SMK Kristen Immanuel bekerja sama dengan EBIZ Microsoft untuk sertifikasi Microsoft Office bagi siswa TKJ. Untuk
          jurusan Penjualan, tersedia Mini Market Sekolah sebagai tempat praktik.
        </p>
        <p class="text-gray-600 leading-relaxed">
          Sekolah juga menjalin kerja sama dengan dunia usaha untuk praktik kerja dan penyaluran lulusan.
        </p>
      </div>
    </div>
  </section>

  <section class=" py-16 px-6 md:px-10 font-montserrat">
    <div class="max-w-7xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-[#1D7BC5] mb-10">
        What Makes Us Different?
      </h2>

      <div class="grid md:grid-cols-3 gap-8">
        {{-- Card 1 --}}
        <div class="relative rounded-2xl overflow-hidden shadow-lg">
          <div class="w-full h-80 overflow-hidden">
            <img src="{{ asset('images/homepage/satria.jpg') }}" alt="Akreditasi & Pengakuan"
              class="w-full h-full object-cover transition-transform duration-700 ease-in-out hover:scale-105 will-change-transform">
          </div>

          <div class="absolute inset-0 flex items-end">
            <div class="w-full p-6 text-left text-white bg-gradient-to-t from-black/60 to-transparent">
              <h3 class="text-lg font-semibold mb-2">Akreditasi & Pengakuan</h3>
              <p class="text-sm leading-relaxed">
                SMK Kristen Immanuel Pontianak memiliki akreditasi A, yang menunjukkan standar akademik yang tinggi.
              </p>
            </div>
          </div>
        </div>

        {{-- Card 2 --}}
        <div class="relative rounded-2xl overflow-hidden shadow-lg">
          <div class="w-full h-80 overflow-hidden">
            <img src="{{ asset('images/homepage/band.jpg') }}" alt="Keterampilan Lewat Ekstrakurikuler"
              class="w-full h-full object-cover transition-transform duration-700 ease-in-out hover:scale-105 will-change-transform object-bottom">
          </div>
          <div class="absolute inset-0 flex items-end">
            <div class="w-full p-6 text-left text-white bg-gradient-to-t from-black/60 to-transparent">
              <h3 class="text-lg font-semibold mb-2">Keterampilan Lewat Ekstrakurikuler</h3>
              <p class="text-sm leading-relaxed">
                Siswa dapat berkembang dengan baik melalui kegiatan ekstrakurikuler maupun kegiatan belajar di kelas.
              </p>
            </div>
          </div>
        </div>

        {{-- Card 3 --}}
        <div class="relative rounded-2xl overflow-hidden shadow-lg">
          <div class="w-full h-80 overflow-hidden">
            <img src="{{ asset('images/homepage/studio.jpg') }}" alt="Infrastruktur yang Lengkap"
              class="w-full h-full object-cover transition-transform duration-700 ease-in-out hover:scale-105 will-change-transform">
          </div>
          <div class="absolute inset-0 flex items-end">
            <div class="w-full p-6 text-left text-white bg-gradient-to-t from-black/60 to-transparent">
              <h3 class="text-lg font-semibold mb-2">Infrastruktur yang Lengkap</h3>
              <p class="text-sm leading-relaxed">
                SMK Kristen Immanuel Pontianak memiliki ruang kelas yang nyaman, laboratorium komputer, perpustakaan, aula
                serbaguna, serta
                fasilitas olahraga.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Activities --}}
  <section class=" py-16 px-6 md:px-10 font-montserrat select-none">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-[#1D7BC5] mb-10">
        Activities
      </h2>

      {{-- Carousel Container --}}
      <div id="carouselContainer" class="overflow-hidden cursor-grab active:cursor-grabbing">
        <div id="carouselTrack" class="flex gap-4 w-max transition-transform duration-300 ease-out">
          <div class="flex-shrink-0 w-[300px] md:w-[400px] rounded-2xl overflow-hidden shadow-lg">
            <img src="{{ asset('images/homepage/aksos.jpg') }}"
              class="w-full h-[250px] object-cover select-none pointer-events-none" alt="" draggable="false">
          </div>
          <div class="flex-shrink-0 w-[300px] md:w-[400px] rounded-2xl overflow-hidden shadow-lg">
            <img src="{{ asset('images/homepage/mtc.jpg') }}"
              class="w-full h-[250px] object-cover select-none pointer-events-none" alt="" draggable="false">
          </div>
          <div class="flex-shrink-0 w-[300px] md:w-[400px] rounded-2xl overflow-hidden shadow-lg">
            <img src="{{ asset('images/homepage/senam_bersama.jpg') }}"
              class="w-full h-[250px] object-cover select-none pointer-events-none" alt="" draggable="false">
          </div>
          <div class="flex-shrink-0 w-[300px] md:w-[400px] rounded-2xl overflow-hidden shadow-lg">
            <img src="{{ asset('images/homepage/mpls.jpg') }}"
              class="w-full h-[250px] object-cover select-none pointer-events-none" alt="" draggable="false">
          </div>
          <div class="flex-shrink-0 w-[300px] md:w-[400px] rounded-2xl overflow-hidden shadow-lg">
            <img src="{{ asset('images/homepage/immafest.jpg') }}"
              class="w-full h-[250px] object-cover select-none pointer-events-none" alt="" draggable="false">
          </div>
        </div>
      </div>
    </div>
  </section>


  {{-- Achievements --}}
  <section class=" py-16 px-6 md:px-10">
    <div class="max-w-7xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-[#1D7BC5] mb-10">
        Latest Achievements
      </h2>

      <div class="grid md:grid-cols-3 gap-8">
        {{-- Card 1 --}}
        <div
          class="bg-white rounded-2xl shadow-md overflow-hidden transform hover:scale-[1.03] transition-transform duration-500 ease-in-out">
          <img src="{{ asset('images/homepage/gaia.jpg') }}" alt="Uncover the Stars" class="w-full h-64 object-cover">
          <div class="p-6 text-left">
            <h3 class="text-lg font-semibold mb-2">Uncover the Stars</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
              On Uncover the Starts Band competition at Gaia City Mall, HIT Band ranked first place.
            </p>
          </div>
        </div>

        {{-- Card 2 --}}
        <div
          class="bg-white rounded-2xl shadow-md overflow-hidden transform hover:scale-[1.03] transition-transform duration-500 ease-in-out">
          <img src="{{ asset('images/homepage/muspus.jpg') }}" alt="Festival Musikalisasi Puisi"
            class="w-full h-64 object-cover">
          <div class="p-6 text-left">
            <h3 class="text-lg font-semibold mb-2">Festival Musikalisasi Puisi</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
              On Festival Musikalisasi Puisi by Balai Bahasa, HIT Band ranked fifth place.
            </p>
          </div>
        </div>

        {{-- Card 3 --}}
        <div
          class="bg-white rounded-2xl shadow-md overflow-hidden transform hover:scale-[1.03] transition-transform duration-500 ease-in-out">
          <img src="{{ asset('images/homepage/smanta.jpg') }}" alt="SMANTA" class="w-full h-64 object-cover">
          <div class="p-6 text-left">
            <h3 class="text-lg font-semibold mb-2">SMANTA</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
              On SMAN 3 Pontianak birthday band competition, HIT Band ranked third place.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
