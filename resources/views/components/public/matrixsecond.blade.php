<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>

    {{-- Aqui van los CSS --}}
    @yield('css_importados')

    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body class="body">
    
    <div class="main">
        {{-- Aqui va el contenido de cada pagina --}}
        @yield('content')

    </div>

   
    
    
    @yield('scripts_importados')
    {{-- @vite(['resources/js/functions.js']) --}}
    <script src="{{asset('js/functions.js')}}"></script>

</body>
</html>