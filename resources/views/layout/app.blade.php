<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("css/main.css")}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/21121cfe94.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Marck+Script&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <title>Gedus-Sénégal</title>
</head>

<body>
    <div class="container">
        @include('layout.navbar')
        @yield('content')
        @include('layout.footer')
    </div>
</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const hamburger = document.querySelector('.navbar-hamburger');
        const navigation = document.querySelector('.navbar-navigation');

        hamburger.addEventListener('click', () => {
            navigation.classList.toggle('show');
        });
    });
</script>
