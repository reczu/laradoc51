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
        @include('flash::message')
        @yield('content')
    </div>

    <script>
        //$('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
    @yield('footer')

</body>
</html>