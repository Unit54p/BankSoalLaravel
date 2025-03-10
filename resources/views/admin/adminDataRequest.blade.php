@extends('layouts/layAdmin')
@section('body')
{{-- sweetalert2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmAccept(requestID) {
        Swal.fire({
            title: "Apakah Anda yakin?"
            , text: "Setelah diterima, status akan berubah menjadi verified."
            , icon: "warning"
            , showCancelButton: true
            , confirmButtonColor: "#3085d6"
            , cancelButtonColor: "#d33"
            , confirmButtonText: "Ya, Terima"
            , cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("acceptForm-" + requestID).submit();
            }
        });
    }
    @if(session('success'))
    Swal.fire({
        title: "Soal terverifikasi!"
        , text: "Soal berhasil diverifikasi, status soal terverifikasi!"
        , icon: "success"
    });

    @endif

</script>

{{-- sweetalert2 --}}

<div class="flex flex-col items-center">
    <span class="text-center text-3xl mb-3">Request Upload</span>
    <div class="mb-6 w-[90%]">
        <table class="table-auto w-full border-collapse border border-gray-300 mt-2 ">
            <thead>
                <tr class="bg-gray-300">
                    <th class="border border-gray-300 px-4 py-2">Mata kuliah</th>
                    <th class="border border-gray-300 px-4 py-2">Status</th>
                    <th class="border border-gray-300 px-4 py-2">Penerbit</th>
                    <th class="border border-gray-300 px-4 py-2">Semester</th>
                    <th class="border border-gray-300 px-4 py-2">Tipe Soal</th>
                    <th class="border border-gray-300 px-4 py-2">Tanggal Ujian</th>
                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if($requests->isEmpty())
                <tr>
                    <td class="text-4xl text-center p-5 " colspan="100%">No request yet.</td>
                </tr>
                @else


                @endif
                @foreach ($requests as $request)

                <tr>
                    <td class="border  border-gray-300 px-4 py-4 text-center">{{ $request->mata_kuliah }}</td>
                    <td class="border  border-gray-300 px-4 py-4 text-center text-red-500">{{ $request->status }}</td>
                    <td class="border  border-gray-300 px-4 py-4 text-center">{{ $request->penerbit}}</td>

                    <td class="border  border-gray-300 px-4 py-4 text-center">{{ $request->semester }}</td>
                    <td class="border border-gray-300 px-4 py-4 text-center">{{ $request->tipe_soal }}</td>
                    <td class="border border-gray-300 px-4 py-4 text-center">{{ $request->tanggal_ujian }}</td>
                    <td class="border border-gray-300 px-4 py-4 text-center ">
                        <div class=" flex gap-4  justify-center">
                            <button href="{{ Storage::url($request->file_path) }}" class="bg-blue-500 border-1 hover:border-black text-white px-4 py-2 rounded">Lihat</button>
                            <button href="#" class="bg-yellow-500 border-1 hover:border-black text-white px-4 py-2 rounded">Edit</button>
                            <button href="#" class="bg-red-500 border-1 hover:border-black text-white px-4 py-2 rounded">Tolak</button>

                            <form id="acceptForm-{{ $request->ID }}" action="{{ route('dataRequestAccept', $request->ID) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="button" onclick="confirmAccept('{{ $request->ID }}')" class="bg-green-600 border-1 hover:border-black text-white px-4 py-2 rounded">
                                    Terima
                                </button>
                            </form>


                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
