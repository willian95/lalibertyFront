<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('coming/assets/img/favicon.png') }}">

    <title>LЛ＊LIBERTУ</title>


    <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/font-awesome.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    @laravelPWA
    <link rel="stylesheet" href="{{ url('assets/css/animsition.min.css') }}">
    <link rel="stylesheet" href="assets/css/responsive.css">
    @stack("css")

</head>

<body>
    <div class="animsition">

        <main>

            @include("partials.header")

            @yield("content")

            <footer class="footer-estyle">
                <div class="footer container mt-5 text-center">

                    <p>All Rights Reserved @ 2021 - LЛ＊LIBERTУ</p>
                </div>
            </footer>
        </main>

    </div>
    <!-- partial -->
    <script src="{{ url('assets/js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
    </script>

    <script src="{{ url('assets/js/slick.min.js') }}"></script>
    <script src="{{ url('assets/js/nav.js') }}"></script>


    <script src="{{ url('assets/js/animsition.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.animsition').animsition();
        });
        $('.css-1tmxu1x').html("Venta");

    </script>


</body>

</html>
