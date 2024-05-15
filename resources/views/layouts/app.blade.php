<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap&_v=20240318105126"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css?_v=20240318105126"
          rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?_v=20240318105126">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}?_v=20240318105126">

    @include('layouts.seo')
</head>

<body>
<div class="wrapper">
    @include('layouts.header')

    <main>

        @yield('content')

    </main>

    @include('layouts.footer')

    <script src="{{ asset('assets/js/anime.min.js') }}?_v=20240318105126"></script>
    <script src="{{ asset('assets/js/app.js') }}?_v=20240318105126"></script>
    @stack('scripts')
</div>
</body>

</html>
