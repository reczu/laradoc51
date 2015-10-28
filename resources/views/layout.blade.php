<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
    @include('partials.navbar')
    <div class="container">
        @if(Session::has('flash_message'))
            <div class="alert alert-success {{ Session::has('flash_message_important') ? 'alert-important' : '' }}">
                @if(Session::has('flash_message_important'))
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                @endif
                {{ session('flash_message') }}
            </div>
        @endif
        @yield('content')
    </div>

    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
    @yield('footer')

</body>
</html>