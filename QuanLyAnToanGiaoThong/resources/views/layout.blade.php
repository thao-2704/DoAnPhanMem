<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Công an phường: Menu chính</title>
    <link rel="stylesheet" href="{{asset('public/frontend/css/main-menu.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/congAnPhuong.css')}}">
    <script src="https://kit.fontawesome.com/043ac30448.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar"></nav>
    @yield('content')
    <footer></footer>

    <script src="{{asset('public/frontend/js/nav.js')}}"></script>
    <script src="{{asset('public/frontend/js/footer.js')}}"></script>
    <script src="{{asset('public/frontend/js/form.js')}}"></script>
    <script src="{{asset('public/frontend/main-menu.js')}}"></script>
</body>
</html>