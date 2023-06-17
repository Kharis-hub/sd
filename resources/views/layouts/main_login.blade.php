<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | SD 1 Adiwarno</title>

    {{-- Aset Link CSS --}}
    <link rel="shortcut icon" href="/img/icon.ico">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="/assets/css/nucleo-icons.css">
    <link rel="stylesheet" href="/assets/css/nucleo-svg.css">
    <link rel="stylesheet" href="/assets/css/soft-ui-dashboard.css?v=1.0.7">
    <link rel="stylesheet" href="/assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/assets/vendor/aos/css/aos.css">

    <style>
        body {
            /* background: linear-gradient(-45deg, #007bff, #20c997, #1998ff); */
            background: linear-gradient(-45deg, #cb0c9f, #0061ff, #17c1e8);
            background-size: 400% 400%;
            animation: gradient 23s ease infinite;
            height: 50vh;
        }

        .bg {
            font-size: 12px;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        @yield('container')
    </div>

    {{-- Aset Link JS --}}
    <script src="/assets/vendor/aos/js/aos.js"></script>
    <script src="/assets/js/core/popper.min.js"></script>
    <script src="/assets/js/core/bootstrap.min.js"></script>
    <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>
