<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Full Stack PHP Developer | Kyle Anderson</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @include('partials.favicons')
    </head>
    <body>
        @include('partials.analytics')
        @include('partials.header')
        <div class="wrapper container">
            @include('sections.experience')
            @include('sections.skills')
            @include('sections.contact')
        </div>
        @include('partials.footer')
        <script src="{{ asset('js/app.js') }}" async defer></script>
    </body>
</html>
