<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME') }} - @yield('page_name') </title>

    @vite('resources/js/app.js')
</head>
<body>
    <div class="container pb-3">
        @include('partials.navbar')
    </div>

<main class="container">
    @yield('main_content')
</main>

    @yield('footer')
    
</body>
</html>