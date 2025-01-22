<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><b>Orange</b> Academy for Programming</title>
    @section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/academy.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    @endsection
    <style>
        .nav-link {
    color: black; /* أو أي لون تريده بشكل افتراضي */
    text-decoration: none;
    padding: 10px 20px;
}

/* When link is active (clicked or selected) */
.nav-link.active {
    color: orange; /* اللون البرتقالي عند التفعيل */
    font-weight: bold;
}
    </style>
</head>
<body>
<header>
    <div class="nav-overlay"></div>
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('logo.png') }}" alt="Orange Logo">
        </div>
        <div class="nav-links">
            <a href="{{ route('watch.home') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ route('watch.academies') }}" class="nav-link {{ Request::is('visit/academies') ? 'active' : '' }}">Academies</a>
        </div>
        <button class="burger-menu" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>
</header>
<script src="{{ asset('assets/js/menu.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}">
</script>
</body>
</html>
