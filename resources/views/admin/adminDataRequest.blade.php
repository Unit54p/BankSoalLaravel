@extends('layouts/layAdmin')
@section('body')

<div class="flex flex-col items-center">
    <span class="text-center text-3xl mb-3">Request Upload</span>
    <div class="mb-6 w-[90%]">
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
                @foreach ($requests as $request)
                <tr>
                    <td class="border  border-gray-300 px-4 py-4 text-center">{{ $request->semester }}</td>
                    <td class="border border-gray-300 px-4 py-4 text-center">{{ $request->tipe_soal }}</td>
                    <td class="border border-gray-300 px-4 py-4 text-center">{{ $request->tanggal_ujian }}</td>
                    <td class="border border-gray-300 px-4 py-4 text-center ">
                        <div class=" gap-4">
                            <a href="{{ Storage::url($request->file_path) }}" class="bg-blue-500 border-1 hover:border-black text-white px-4 py-2 rounded">Lihat</a>
                            <a href="#" class="bg-yellow-500 border-1 hover:border-black text-white px-4 py-2 rounded">Edit</a>
                            <a href="#" class="bg-red-500 border-1 hover:border-black text-white px-4 py-2 rounded">Hapus</a>
                            <a href="#" class="bg-green-500 border-1 hover:border-black text-white px-4 py-2 rounded">Terima</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
