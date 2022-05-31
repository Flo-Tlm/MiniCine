<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <title>Films</title>

    <header>
        @include('layouts.header')
    </header>

</head>

<body>


    @yield('header')

    <main>
        @yield('main')
    </main>

    <main>
        @yield('contenu')
    </main>

    <main>
        @yield('content')
    </main>

  

    <!-- footer -->
    <footer>
        @include('layouts.footer')
    </footer>



</body>

</html>
