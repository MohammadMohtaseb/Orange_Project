<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academies</title>
</head>
<body>
    <div class="container">
        @yield('content')  <!-- This is where the content section from other views is injected -->
    </div>
</body>
</html>
