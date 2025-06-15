<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tessa | Interactive Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Animated Background -->
    <div class="bg-particles" id="particles"></div>
    
    @include('partials.header')
    

    @yield('content')

    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>