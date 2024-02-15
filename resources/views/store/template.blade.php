<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!-- OWL CSS -->
{{--    <link rel="stylesheet" href="./css/owl.carousel.min.css">--}}
{{--    <link rel="stylesheet" href="./css/owl.theme.default.min.css">--}}
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <!--Boxicons links -->
    <!-- {{--    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">--}} -->
    <!-- Custom CSS File-->
{{--    <link rel="stylesheet" href="./css/main.css">--}}
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Icons-->
    <!-- {{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">--}} -->
    <!-- favicon-->
{{--    <link rel="icon" type="image/png" href="./img/favcionF.png">--}}
{{--    <link rel="shortcut icon" type="image/png" href="./img/favcionF.png">--}}

    <link rel="icon" type="image/png" href="{{asset('img/favcionF.png')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('img/favcionF.png')}}">

    <title>@yield('title','Fermaplastic')</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

<div class="container">
    @if (count($errors)> 0)
        @include('store.partials.errors')
    @endif
</div>

@if(\Session::has('message') || \Session::has('error'))
    @include('store.partials.message')
@endif
@include('store.partials.nav')
@yield('content')
@include('store.partials.footer')
{{--@include('store.partials.cookies')--}}



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/5d716e9845.js"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
{{--<script>
    if(window.location.href === 'http://www.fermaplastic.com/index.php/sobre_nosotros' || window.location.href === 'https://www.fermaplastic.com/index.php/sobre_nosotros'){
         location.replace("http://www.fermaplastic.com/");
    }
</script>--}}
</body>

</html>
