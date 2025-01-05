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
</head>
<body>
<header>
    <div class="nav-overlay"></div>
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('assets/images/orange-logo.svg') }}" alt="Orange Logo">
        </div>
        <div class="nav-links">
            <a href="{{ route('watch.home') }}" class="active">Home</a>
            <a href="{{ route('watch.academies') }}">Academies</a>
            {{-- <a href="#how-it-works">How It Works?</a> --}}
            {{-- <a style="padding: .5rem 1.6rem .5rem .5rem;" href="#support">Support</a>
            <div class="search-box">
                <input type="text" placeholder="Search..." class="search-input">
                <div class="Sicon">
                    <svg class="search-icon fas fa-search" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.625 15.75C12.56 15.75 15.75 12.56 15.75 8.625C15.75 4.68997 12.56 1.5 8.625 1.5C4.68997 1.5 1.5 4.68997 1.5 8.625C1.5 12.56 4.68997 15.75 8.625 15.75Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.5 16.5L15 15" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div> --}}

            <a href="{{route('login')}}" class="login-btn">Login</a>
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
