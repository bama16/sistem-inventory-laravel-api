<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">





    <title>Gudang</title>

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="/style/main.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.css" rel="stylesheet" />
    @stack('addon-style')
</head>

<body>
    <div class="wrapper">
        @include('includes.sidebar-admin')

        <!--Navbar Atas-->
        <div class="main">
            @include('includes.navbar')
            <!--End Navbar-->

            {{-- Content --}}
            @yield('content')

            @yield('js')
        </div>
    </div>

    @stack('prepend-script')
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
    <script src="{{ asset('../js/scrip.js') }}"></script>
    
    @stack('addon-script')"  

</body>

</html>