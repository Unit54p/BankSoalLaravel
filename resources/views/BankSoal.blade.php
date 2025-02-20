<link rel="stylesheet" href="{{ asset('css/bankSoal.css') }}">
@extends('layouts/layBas')
@section('body')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('errorSoalTidakDiTemukan'))
<script>
    Swal.fire({
        icon: 'error'
        , title: 'Tidak ditemukan soal yang relevan'
        , text: '{{ session("error") }}'
    , });

</script>
@endif



<div class="contentSection">
    {{-- search nar --}}
    <div class="judulContent my-5 text-center">Bank soal</div>
    <div class="flex justify-center">
        <form action="{{ route('cariSoalProcess') }}" method="post">
            @csrf
            <div class=" flex flex-row items-center justify-evenly  cardNormal bgGradientprimary p-5 gap-5">
                <div class="text-xl ">
                    Cari matkul
                </div>
                <input list="mataKuliahList" name="input_cariSoal" placeholder="Cari disini" class="inp_cariSoal text-xl p-3">
                <!-- Datalist untuk daftar mata kuliah -->
                <datalist id="mataKuliahList">
                    <option value="Matematika Diskrit">
                    <option value="Pemrograman Web">
                    <option value="Jaringan Komputer">
                    <option value="Kecerdasan Buatan">
                    <option value="Struktur Data">
                    <option value="Sistem Operasi">
                </datalist>
                <button class="btnCariSoal text-xl" type="submit">Cari</button>
            </div>
        </form>
    </div>
</div>

@if(isset($soal) && $soal->isNotEmpty())
<div class="grid grid-cols-4 gap-4 my-10 justify-evenly">
    @foreach ($soal as $dataSoal)
    <div class="contentSection">
        <div class="cardBankSoal flex flex-col bgGradientprimary px-10 py-8 gap-2 border">
            <span class="text-2xl font-medium">{{ $dataSoal->mata_kuliah }}</span>
            <div class="flex flex-row gap-4 text-xl">
                <span>Semester {{ $dataSoal->semester }}</span> | <span>{{ $dataSoal->tipe_soal }}</span>
            </div>
            <span class="text-xl">
                {{ $dataSoal->tanggal_ujian }}
            </span>
           <a href="{{ Storage::url($dataSoal->file_path) }}" class="btnPrimary btnPrimaryCostumWidth text-xl">Download pdf</a>


 </div>
    </div>
    @endforeach
</div>

@else
<div class="flex items-center justify-center h-80">
    <span class="text-4xl font-medium  text-neutral-300">

        Learn from the past <br>
        be better for future
    </span>
</div>

@endif

@endsection
