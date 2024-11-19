<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KafkaMath | {{ $title }}</title>
        <link href="{{ asset('/bootstrap/vendor/twbs/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/bootstrap-icons/vendor/twbs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <div>
            <main>
                @include('partials.navbar')
                @yield('container')
            </main> 
        </div>
    </body>

    <script src="{{ asset('/bootstrap/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js"></script>
    
</html>