@extends('templates/master')

@section('title', 'Data Mahasiswa')

@section('header-button')
    <div class="flex justify-between items-center mt-4">
        <h2 class="text-xl font-bold">Form Data</h2>
        <a href="..." class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            Tambah Data
        </a>
    </div>
@endsection

@section('content')
    <table class="w-full table-auto border-collapse border border-gray-300 mt-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="border px-4 py-2 text-start">No</th>
                <th class="border px-4 py-2 text-start">NIM</th>
                <th class="border px-4 py-2 text-start">Nama</th>
                <th class="border px-4 py-2 text-start">Program Studi</th>
                <th class="border px-4 py-2 text-start">Fakultas</th>
                <th class="border px-4 py-2 text-start">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp

            @foreach ($... as $...)
                <tr class="odd:bg-white even:bg-gray-100">
                    <td class="border px-4 py-2"><?= $i++ ?></td>
                    <td class="border px-4 py-2">
                        <a href="..." class="underline hover:text-blue-500">
                            <?= $...->nim ?>
                        </a>
                    </td>
                    <td class="border px-4 py-2"><?= $... ?></td>
                    <td class="border px-4 py-2"><?= $... ?></td>
                    <td class="border px-4 py-2"><?= $... ?></td>
                    <td class="border px-4 py-2">
                        <a 
                            class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">Edit</a> |
                        <form method="..." action="..."
                            onsubmit="return confirm('Apakah kamu yakin ingin menghapus data?')" class="inline">
                            {{-- @... --}}
                            {{-- @... --}}
                            <button type="submit" class="bg-red-700 hover:bg-red-800 text-white px-3 py-1 rounded">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
