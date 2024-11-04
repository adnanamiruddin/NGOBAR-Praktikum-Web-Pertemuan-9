@extends('templates/master')

@section('title', 'Edit Mahasiswa')

@section('header-button')
    <div class="flex justify-between items-center mt-4">
        <h2 class="text-xl font-bold">Form Data</h2>
        <a href="{{ url('/students') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            Kembali
        </a>
    </div>
@endsection

@section('content')
    <form action="..." method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-12 items-center">
            <label for="nim" class="col-span-2 font-medium">NIM</label>
            <input type="text" id="nim" name="nim" value="{..."
                class="col-span-10 mt-1 p-1.5 border rounded disabled:bg-gray-200" disabled>
        </div>

        <div class="grid grid-cols-12 items-center">
            <label for="name" class="col-span-2 font-medium">Nama</label>
            <input type="text" id="name" name="name" value="..."
                class="col-span-10 mt-1 p-1.5 border rounded">
        </div>

        <div class="grid grid-cols-12 items-center">
            <label for="studyProgram" class="col-span-2 font-medium">Program Studi</label>
            <input type="text" id="studyProgram" name="studyProgram" value="..."
                class="col-span-10 mt-1 p-1.5 border rounded">
        </div>

        <div class="grid grid-cols-12 items-center">
            <label for="faculty" class="col-span-2 font-medium">Fakultas</label>
            <select id="faculty" name="faculty" class="col-span-10 mt-1 p-1.5 border rounded">
                <option value="">- Pilih Fakultas -</option>
                <option value="Kedokteran" {{ ... == 'Kedokteran' ? 'selected' : '' }}>Kedokteran</option>
                <option value="MIPA" {{ ... == 'MIPA' ? 'selected' : '' }}>MIPA</option>
                <option value="Teknik" {{ ... == 'Teknik' ? 'selected' : '' }}>Teknik</option>
            </select>
        </div>

        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded">
            Simpan
        </button>
    </form>
@endsection
