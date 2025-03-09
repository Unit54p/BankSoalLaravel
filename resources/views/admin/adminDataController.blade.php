@extends('layouts/layAdmin')
@section('body')
@php
// disimpan dalam array
$groupedSoal = $dataSoal->groupBy('mata_kuliah');

@endphp
@foreach ($groupedSoal as $mataKuliah => $soals)
<div class="flex flex-col items-center">

    <div class="mb-6 w-[90%]">
        <h2 class="text-xl w-full font-semibold  p-2">{{ $mataKuliah }}</h2>
        <table class="table-auto w-full border-collapse border border-gray-300 mt-2 ">
            <thead>
                <tr class="bg-gray-300">
                    <th class="border border-gray-300 px-4 py-2">Semester</th>
                    <th class="border border-gray-300 px-4 py-2">Tipe Soal</th>
                    <th class="border border-gray-300 px-4 py-2">Tanggal Ujian</th>
                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($soals as $soal)
                <tr>
                    <td class="border  border-gray-300 px-4 py-4 text-center">{{ $soal->semester }}</td>
                    <td class="border border-gray-300 px-4 py-4 text-center">{{ $soal->tipe_soal }}</td>
                    <td class="border border-gray-300 px-4 py-4 text-center">{{ $soal->tanggal_ujian }}</td>
                    <td class="border border-gray-300 px-4 py-4 text-center">
                        <a href="{{ Storage::url($soal->file_path) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Download PDF</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endforeach

@endsection
