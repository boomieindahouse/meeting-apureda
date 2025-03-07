<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'APUREDA Thailand')</title>

    <!-- ใช้ Vite โหลด CSS/JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- โหลดฟอนต์ Noto Sans Thai -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>    

    <style>
        body {
            font-family: 'Noto Sans Thai', sans-serif;
        }
    </style>
</head>
<body class="font-sans">

    <!-- Navbar ใช้ร่วมกันทุกหน้า -->
    @include('client.components.navbar')

    <!-- เนื้อหาของแต่ละหน้า -->
    <main>
        @yield('content')
    </main>

    <!-- Footer ใช้ร่วมกันทุกหน้า -->
    @include('client.components.footer')

</body>
</html>
