<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/icon.png')}}">

    <title>Mon site perso</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/album.css')}}" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>
<body>

@include('layouts.header')

<main role="main">

    <section class="py-5 text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Bienvenue sur mon site <br><span class="badge badge-primary ">perso </span>!</h1>
            <p class="lead text-muted">Vous allez découvrir mon univers et pouvoir acheter des choses intéressantes.</p>

        </div>
    </section>

    @yield('content')

</main>

@include('layouts.footer')
