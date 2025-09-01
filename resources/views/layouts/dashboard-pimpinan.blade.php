<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        @include('includes.sidebar-pimpinan')

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.js"></script>
    <script src="{{ asset('../js/scrip.js') }}"></script>
    
    @stack('addon-script')"    
</body>
</html>