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

<hr>
<br>
<div style="color: black ; background-color : white ; margin-bottom:3%" >
    <div class="logo" style="margin-left: 5%">
        <img src="{{ asset('logo.png') }}" alt="Orange Logo" style="float: left">
        <p style="padding-top: 2% ; margin-left:78% ; font-size:18px">&copy; 2025 All Rights Reserved.</p>
    </div>
</div>

    <script src="{{ asset('assets/js/menu.js') }}"></script>
            {{-- @section('js') --}}
            <script src="{{ asset('assets/js/script.js') }}"></script>
           {{--  @endsection --}}
        </body>
</html>


