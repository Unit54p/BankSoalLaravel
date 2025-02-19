@extends('layouts/layBas')

@section('body')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('error'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Swal.fire({
        title: "Session Habis!"
        , text: "{{ session('error') }}"
        , icon: "warning"
        , confirmButtonText: "OK"
    });

</script>
@endif

@if(session('success'))
<script>
    Swal.fire({
        title: "Berhasil!"
        , text: `{!! session('success') !!}`
        , icon: "success"
        , confirmButtonText: "OK"
    });

</script>
@endif

<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">Upload Soal</h2>

    <form action="{{ route('uploadSoalProcess') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Nama File -->
        <div class="mb-4">
            <label class="block text-gray-700">Nama File</label>
            <input type="text" name="namaFile" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Tanggal Ujian -->
        <div class="mb-4">
            <label class="block text-gray-700">Tanggal Ujian</label>
            <input type="date" name="tanggalUjian" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Semester -->
        <div class="mb-4">
            <label class="block text-gray-700">Semester</label>
            <select name="semester" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="" disabled selected>Pilih Semester</option>
                @for ($i = 1; $i <= 14; $i++) <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
            </select>
        </div>

        <!-- Pilihan Mata Kuliah -->
        <div class="mb-4">
            <label class="block text-gray-700">Mata Kuliah</label>
            <select name="mataKuliah" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="Matematika">Matematika</option>
                <option value="Fisika">Fisika</option>
                <option value="Kimia">Kimia</option>
            </select>
        </div>

        <!-- File PDF -->
        <div class="mb-4">
            <label class="block text-gray-700">Upload File PDF</label>
            <input type="file" name="fileSoal" accept=".pdf" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600 transition duration-150">
            Upload Soal
        </button>
    </form>
</div>
@endsection
