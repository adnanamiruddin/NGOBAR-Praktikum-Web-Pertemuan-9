@extends('templates/master')

@section('title', 'Detail Mahasiswa')

@section('header-button')
    <div class="flex justify-between items-center mt-4">
        <h2 class="text-xl font-bold">{{ ... }}</h2>
        <a href="{{ url('/students') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            Kembali
        </a>
    </div>
@endsection

@section('content')
    <div class="mt-4">
        <p>Hai, nama saya {{ ... }} dengan NIM {{ ... }}.
        </p>

        <p>
            Saat ini saya sedang menempuh pendidikan di Program Studi {{ ... }}, Fakultas
            {{ ... }}
        </p>
    </div>
@endsection
