<link rel="stylesheet" href="{{ asset('css/bankSoal.css') }}">
@extends('layouts/layBas')
@section('body')
<div class=" contentSection">
    {{-- search nar --}}
    <div class="judulContent my-5 text-center">Bank soal</div>
    <div class="flex justify-center">
        <form action="">
            <div class=" flex flex-row items-center justify-evenly  cardNormal bgGradientprimary p-5 gap-5">
                <div class="text-xl ">
                    Cari matkul
                </div>
                <input type="text" placeholder="Cari disini" class="inp_cariSoal  text-xl p-3 ">
                <button class="btnCariSoal text-xl" type="submit">Cari</button>
            </div>
        </form>
    </div>

</div>
@endsection
