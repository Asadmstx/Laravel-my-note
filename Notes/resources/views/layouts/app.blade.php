<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tab-title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('includes.header')<!-- header -->

    @if(Request::is('/'))
        @include('includes.hero')<!-- hero -->
    @endif

    <div class="container mt-5"><!-- content -->
        @yield('content')
    </div>

    @include('includes.footer')<!-- footer -->
    <script src="/js/app.js"></script>
</body>
</html>