<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        {{--<meta charset="UTF-8">--}}
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="U salonu Srebrni Mjesec možete dobiti sve najbolje usluge. Salon je opremljen vrhunskom kvalitetom sa velikom ugodnošću u kojem su zaposlene 4 vrhunske frizerke. Tel: 052/418-900" />

        <title>Srebrni Mjesec j.d.o.o. - <?= $name; ?></title>


        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">


        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap-theme.min.css" type="text/css">

        {{--Galerija Style CSS--}}
        <link rel="stylesheet" href="css/baguetteBox.css">

        <!-- Fonts -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        {{--Google fonts--}}
        <link href="https://fonts.googleapis.com/css?family=Kanit|Mogra|Nosifer|Roboto+Slab&amp;subset=latin-ext" rel="stylesheet">



        <!-- Costum CSS -->
        <link href="css/nav_footer.css" rel="stylesheet">
        <link href="css/general.css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet">
        <link href="css/cjenik.css" rel="stylesheet">
        <link href="css/galerija.css" rel="stylesheet">
    </head>
    <body>

        @include('layouts.nav')
        @include('layouts.analytics')

        @yield('content')

        @include('layouts.footer')

        <!-- Bootstrap Core JavaScript -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        {{--Galerija JavaScript--}}
        <script src="js/baguetteBox.js"></script>
        <script>
            baguetteBox.run('.tz-gallery');
        </script>
    </body>
</html>
