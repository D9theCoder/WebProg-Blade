<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    @stack('styles') <!-- This will include the styles pushed from components -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Adjust this path if necessary -->
</head>
<body>
    <div class="container mx-auto">
        @yield('content') <!-- This is where the content from other views will be injected -->
    </div>

    @stack('scripts')
    
</body>
</html>
