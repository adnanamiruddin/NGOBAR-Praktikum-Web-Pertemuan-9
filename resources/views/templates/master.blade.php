<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen mt-6">
    <div class="w-full max-w-4xl mx-auto p-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-bold bg-gray-100 -m-6 mb-4 px-4 py-2">
                @yield('title')
            </h2>

            @include('components/message')

            @yield('header-button')

            @yield('content')
        </div>
    </div>
</body>

</html>
