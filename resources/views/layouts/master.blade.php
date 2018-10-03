<!doctype html>
<html lang="en" style="height: 100%">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ITRW324 CSECProject">
    <meta name="author" content="Cybertronix Group">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cybertronix</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @yield('style')

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    

</head>

@yield('nav')

<body style="height: 100%">

<div class="container" id="pageContentOuter">
    @yield('content')

    @yield('footer')
    @yield('scripts')
</div>
</body>

</html>