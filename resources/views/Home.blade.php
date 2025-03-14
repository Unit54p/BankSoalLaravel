<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@extends('layouts/layBas')
@section('body')
{{-- hero section --}}
{{-- <div class="hero w-[100%] flex justify-between items-center bgGradientprimary costumShadow">
        <div class="flex flex-col justify-start gap-2">
            <span class="text-4xl">
                Learn from the past <br>
                be better for future
            </span>
            <span>
                temukan soal-soal relevan yang dapat membantumu belajar
            </span>
            <button class="btnPrimary text-xl" onclick="window.location='{{ route('bankSoal') }}'">Cari soal sekarang</button>
</div>
<img src="{{ Storage::url('img\WebAsset\thinking robot.webp') }}" alt="" class="imgHero">
</div> --}}


<div class="hero flex flex-col justify-between items-center bgGradientprimary costumShadow  md:flex-row md:p-8">

    <div class="flex flex-col  gap-2  text-left ">

        <span class="text-3xl md:text-6xl font-weight-500">
            Learn from the past <br>
            be better for future
        </span>

        <span class="text-sm md:text-base">
            Temukan soal-soal relevan yang dapat membantumu belajar
        </span>

        <button class="btnPrimary  text-lg px-4 py-3 md:text-xl md:p-4 md:mx-0" onclick="window.location='{{ route('bankSoal') }}'">
            Cari soal sekarang
        </button>

    </div>

    <img src="{{ Storage::url('img/WebAsset/thinking robot.webp') }}" alt="Thinking Robot" class="imgHero hidden md:block w-48 md:w-64 lg:w-80 mt-4 md:mt-0">
</div>




{{-- content section --}}
<div class=" contentSection">
    <div class=" my-5 text-center text-4xl md:text-6xl">Fitur</div>



    {{-- card --}}
    <div class="md:grid-cols-4 grid grid-cols-2 gap-y-3">
        {{-- 1 --}}
        <div class="cardFeature costumShadow p-5 mx-auto ">
            <img src="{{ Storage::url('img/WebAsset/Group 56.png') }}" alt="" class="iconFeature">
            <div class=" flex flex-col items-start justify-center  mt-2 ">
                <span class="judulFeature font-semibold text-2xl">Akses sepenuhnya</span>
                <span class="kontenFeature">Semua fitur terbuka untuk semua orang</span>
            </div>
        </div>
        {{-- 2 --}}
        <div class="cardFeature costumShadow p-5  mx-auto">
            <img src="{{ Storage::url('img/WebAsset/Group 56.png') }}" alt="" class="iconFeature">
            <div class=" flex flex-col items-start justify-center  mt-2 ">
                <span class="judulFeature font-semibold text-2xl">Akses sepenuhnya</span>
                <span class="kontenFeature">Semua fitur terbuka untuk semua orang</span>
            </div>
        </div>
        {{-- 3 --}}
        <div class="cardFeature costumShadow p-5 mx-auto">
            <img src="{{ Storage::url('img/WebAsset/Group 56.png') }}" alt="" class="iconFeature">
            <div class=" flex flex-col items-start justify-center  mt-2 ">
                <span class="judulFeature font-semibold text-2xl">Akses sepenuhnya</span>
                <span class="kontenFeature ">Semua fitur terbuka untuk semua orang</span>
            </div>
        </div>
        {{-- 4 --}}
        <div class="cardFeature costumShadow p-5 mx-auto">
            <img src="{{ Storage::url('img/WebAsset/Group 56.png') }}" alt="" class="iconFeature">
            <div class=" flex flex-col items-start justify-center  mt-2 ">
                <span class="judulFeature font-semibold text-2xl">Akses sepenuhnya</span>
                <span class="kontenFeature">Semua fitur terbuka untuk semua orang</span>
            </div>
        </div>
    </div>



    {{-- section apa itu bank soal? --}}
    <div class="flex md:flex-row my-5 md:mt-14 items-center justify-between flex-col">
        {{-- teks --}}
        <div class="flex justify-center text-4xl md:text-6xl w-140 ">
            Apa itu <br class="md:block hidden"> bank soal?
        </div>
        {{-- card --}}
        <div class="bigCard text-xl">
            <div class="flex flex-col p-6">
                <div class="mb-3">
                    Bank soal merupakan fitur yang menghadirkan soal-soal Quiz, UTS, UAS bahkan tugas akhir dari kakak tingkat yang sudah menjalani suatu mata kuliah di teknik informatika.
                    <br>
                    kamu dapat mendapatkannya dengan mencari dan mendownload pdf yang tersedia dari mata kuliah yang bersangkutan.
                </div>
                <button class="btnPrimary">Lihat bank soal</button>
            </div>
        </div>
    </div>



    {{-- panduan penggunaan bank soal --}}
    <div class=" my-5 text-4xl md:text-6xl text-center">panduan penggunaan bank soal</div>
    {{-- card --}}
    <div class="md:flex md:justify-evenly  grid grid-cols-2 gap-y-3">
        {{-- 1 --}}
        <div class="cardFeaturePanduan bgGradientprimary  costumShadow p-5 mx-auto">
            <div class=" flex justify-center flex-col items-center  mt-2 ">
                <div class="judulFeature font-semibold text-2xl p-4 bgIconColor">1</div>
                <div class="kontenFeature text-center mt-2">Masuk ke halaman Bank soal</div>
            </div>
        </div>
        {{-- 2 --}}
        <div class="cardFeaturePanduan bgGradientprimary  costumShadow p-5 mx-auto">
            <div class=" flex justify-center flex-col items-center  mt-2 ">
                <div class="judulFeature font-semibold text-2xl p-4 bgIconColor">2</div>
                <div class="kontenFeature text-center mt-2">Cari mata kuliah</div>
            </div>
        </div>
        {{-- 3 --}}
        <div class="cardFeaturePanduan bgGradientprimary  costumShadow p-5 mx-auto">
            <div class=" flex justify-center flex-col items-center  mt-2 ">
                <div class="judulFeature font-semibold text-2xl p-4 bgIconColor">3</div>
                <div class="kontenFeature text-center mt-2">Pilih tipe soal dan tanggal yang sesuai</div>
            </div>
        </div>
        {{-- 4 --}}
        <div class="cardFeaturePanduan bgGradientprimary  costumShadow p-5 mx-auto">
            <div class=" flex justify-center flex-col items-center  mt-2 ">
                <div class="judulFeature font-semibold text-2xl p-4 bgIconColor">4</div>
                <div class="kontenFeature text-center mt-2">Download pdf dan pelajari</div>
            </div>
        </div>
    </div>



    {{-- section contribution --}}

    {{-- judul --}}
    <div class="judulContent my-5 text-center">Top contribution</div>
    {{-- judul --}}

    {{-- container content --}}
    <div class="md:flex md:justify-evenly grid grid-cols-1 gap-y-5 place-items-center">

        {{-- content --}}
        <div class="relative flex flex-row items-center gap-5 w-[330px] p-3 rounded-lg bgGradientprimary costumShadow">
            <!-- Gambar -->
            <div>
                <img src="{{ Storage::url('img/WebAsset/robot front view.webp') }}" alt="Robot" class="w-30 h-30 rounded-lg">
            </div>

            <!-- Konten -->
            <div class="flex flex-col w-28">
                <span class="font-semibold text-gray-900 text-xl">Surya Ario</span>
                <span class="text-sm text-gray-500">total kontribusi</span>
                <span class="text-lg font-bold text-black">15</span>
            </div>

            <!-- Badge -->
            <div class="absolute bottom-3 right-3 w-10 h-10 flex items-center justify-center rounded-full border-2 border-yellow-500 bg-white text-black font-bold ">
                1
            </div>
        </div>

        <div class="relative flex flex-row items-center gap-5 w-[330px] p-3 rounded-lg bgGradientprimary costumShadow">
            <!-- Gambar -->
            <div>
                <img src="{{ Storage::url('img/WebAsset/robot front view.webp') }}" alt="Robot" class="w-30 h-30 rounded-lg">
            </div>

            <!-- Konten -->
            <div class="flex flex-col w-28">
                <span class="font-semibold text-gray-900 text-xl">Surya Ario</span>
                <span class="text-sm text-gray-500">total kontribusi</span>
                <span class="text-lg font-bold text-black">11</span>
            </div>

            <!-- Badge -->
            <div class="absolute bottom-3 right-3 w-10 h-10 flex items-center justify-center rounded-full border-2 border-green-500 bg-white text-black font-bold ">
                2
            </div>
        </div>

        <div class="relative flex flex-row items-center gap-5 w-[330px] p-3 rounded-lg bgGradientprimary costumShadow">
            <!-- Gambar -->
            <div>
                <img src="{{ Storage::url('img/WebAsset/robot front view.webp') }}" alt="Robot" class="w-30 h-30 rounded-lg">
            </div>

            <!-- Konten -->
            <div class="flex flex-col w-28">
                <span class="font-semibold text-gray-900 text-xl">Surya Ario</span>
                <span class="text-sm text-gray-500">total kontribusi</span>
                <span class="text-lg font-bold text-black">10</span>
            </div>

            <!-- Badge -->
            <div class="absolute bottom-3 right-3 w-10 h-10 flex items-center justify-center rounded-full border-2 border-blue-500 bg-white text-black font-bold ">
                3
            </div>
        </div>
        {{-- content --}}
    </div>
    {{-- container content --}}


    {{-- section bergabung dengan komunitas --}}
    <div class="flex flex-row mt-14 items-center justify-between mt">
        {{-- teks --}}
        <div class="text-start text-5xl">
            Bergabung dengan <br>
            komunitas!

        </div>
        {{-- card --}}
        <div class="bigCard text-xl">
            <div class="flex flex-col p-6">
                <div class="mb-3">
                    Temukan orang-orang yang memiliki dedikasi seperti kamu dalam komunitas kami. Buat kontribusi pertamamu, jadilah bagian dari sesuatu yang lebih besar, dan mulai perjalanan serumu bersama kami!

                </div>

                <button class="btnPrimary">Bergabung dengan komunitas</button>
            </div>

        </div>

    </div>

</div>
@endsection
