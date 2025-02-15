<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@extends('layouts/layBas')
@section('body')
{{-- hero section --}}
<div class="flex justify-center">
    <div class="hero w-[70%] flex justify-between items-center bgGradient">

        <div class="flex flex-col justify-start gap-2">
            <span class="text-4xl">
                Learn from the past <br>
                be better for future
            </span>
            <span>
                temukan soal-soal relevan yang dapat membantumu belajar
            </span>
            <button class="btnPrimary" onclick="window.location='{{ route('bankSoal') }}'">Langsung belajar</button>
        </div>
        <img src="{{ Storage::url('img\WebAsset\thinking robot.webp') }}" alt="" class="imgHero">
    </div>
</div>

{{-- content section --}}
<div class=" contentSection">
    <div class="judulContent text-center">Fitur</div>
    <div class="flex flex-xol justify-between">
        {{-- 1 --}}
        <div class="cardFeature p-5 ">
            <img src="{{ Storage::url('img/WebAsset/Group 56.png') }}" alt="" class="iconFeature">
            <div class=" flex flex-col items-start justify-center  mt-2 ">
                <span class="judulFeature font-semibold text-2xl">Akses sepenuhnya</span>
                <span class="kontenFeature">Semua fitur terbuka untuk semua orang</span>
            </div>
        </div>


        {{-- 2 --}}
        <div class="cardFeature p-5 ">
            <img src="{{ Storage::url('img/WebAsset/Group 56.png') }}" alt="" class="iconFeature">
            <div class=" flex flex-col items-start justify-center  mt-2 ">
                <span class="judulFeature font-semibold text-2xl">Akses sepenuhnya</span>
                <span class="kontenFeature">Semua fitur terbuka untuk semua orang</span>
            </div>
        </div>
        {{-- 3 --}}
        <div class="cardFeature p-5 ">
            <img src="{{ Storage::url('img/WebAsset/Group 56.png') }}" alt="" class="iconFeature">
            <div class=" flex flex-col items-start justify-center  mt-2 ">
                <span class="judulFeature font-semibold text-2xl">Akses sepenuhnya</span>
                <span class="kontenFeature">Semua fitur terbuka untuk semua orang</span>
            </div>
        </div>
        {{-- 4 --}}
        <div class="cardFeature p-5 ">
            <img src="{{ Storage::url('img/WebAsset/Group 56.png') }}" alt="" class="iconFeature">
            <div class=" flex flex-col items-start justify-center  mt-2 ">
                <span class="judulFeature font-semibold text-2xl">Akses sepenuhnya</span>
                <span class="kontenFeature">Semua fitur terbuka untuk semua orang</span>
            </div>
        </div>
    </div>
</div>
{{-- panduan penggunaan bank soal --}}
<div class=" contentSection">
    <div class="judulContent text-center">panduan penggunaan bank soal</div>
    <div class="flex flex-xol justify-center gap-10">
        {{-- 1 --}}
        <div class="cardFeaturePanduan p-5">
            <div class=" flex justify-center flex-col items-center  mt-2 ">
                <div class="judulFeature font-semibold text-2xl p-4 bgIconColor">1</div>
                <div class="kontenFeature text-center mt-2">Masuk ke halaman Bank soal</div>
            </div>
        </div>
        {{-- 2 --}}
        <div class="cardFeaturePanduan p-5 ">
            <div class=" flex justify-center flex-col items-center  mt-2 ">
                <div class="judulFeature font-semibold text-2xl p-4 bgIconColor">2</div>
                <div class="kontenFeature text-center mt-2">Cari mata kuliah</div>


            </div>
        </div>
        {{-- 3 --}}
        <div class="cardFeaturePanduan p-5 ">
           <div class=" flex justify-center flex-col items-center  mt-2 ">
               <div class="judulFeature font-semibold text-2xl p-4 bgIconColor">3</div>
               <div class="kontenFeature text-center mt-2">Pilih mata kuliah

                   yang tersedia</div>

           </div>
        </div>
        {{-- 4 --}}
        <div class="cardFeaturePanduan p-5 ">
           <div class=" flex justify-center flex-col items-center  mt-2 ">
               <div class="judulFeature font-semibold text-2xl p-4 bgIconColor">4</div>
               <div class="kontenFeature text-center mt-2">Pilih mata kuliah

                   yang tersedia</div>

           </div>
        </div>
    </div>
</div>

@endsection
