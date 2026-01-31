@extends('layouts.main')

@section('title', 'Majors')

@section('content')

  {{-- SECTION INTRO --}}
  <section class="px-6 md:px-10 py-16 max-w-5xl mx-auto mt-5 text-center">
    <h1 class="text-3xl font-bold mb-6">Our Majors</h1>

    <p class="text-gray-700 leading-relaxed">
      SMK Kristen Immanuel menawarkan berbagai jurusan yang dirancang untuk
      membekali siswa dengan pengetahuan, keterampilan, dan pengalaman langsung
      yang mereka butuhkan untuk sukses di masa depan — baik di pendidikan
      tinggi maupun dunia kerja.
    </p>

    <p class="text-gray-700 leading-relaxed mt-4">
      Setiap jurusan dibimbing oleh guru-guru yang berdedikasi, didukung oleh
      fasilitas modern, dan disesuaikan dengan standar industri terkini agar
      lulusan kami siap dan mampu bersaing.
    </p>

    <p class="mt-6 font-medium">
      Temukan jurusan yang sesuai dengan minat dan tujuanmu!
    </p>
  </section>

  {{-- SECTION MAJORS (GAMBAR FULL) --}}
  <section class="px-6 md:px-10 py-12">
    <div class="max-w-7xl mx-auto">
      <img src="{{ asset('images/majors/major.png') }}" alt="Majors" class="w-full h-auto rounded-lg" draggable="false">
    </div>
  </section>

@endsection
