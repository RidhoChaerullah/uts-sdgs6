<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Air Bersih</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/x-icon" href="/img/favicon-32x32.png">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- from node_modules -->
    <script src="node_modules/@material-tailwind/html/scripts/collapse.js"></script>
    <!-- from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>
    
</head>

<body class="h-full">
    <x-navbar></x-navbar>
    <main>
        <div class="w-11/12 mx-auto max-w-4xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            {{ $slot }}
        </div>
    </main>
</body>

</html>
