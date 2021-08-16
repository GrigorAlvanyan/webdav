<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/jumbotron.css">
    <title>{{ $title }}</title>

</head>
<body>

    @section('navbar')
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">Laravel Project</a>
                    <a href="{{ route('home') }}" class="navbar-brand">Home</a>
                    <a href="{{ route('about') }}" class="navbar-brand">About</a>
                    <a href="{{ route('articles') }}" class="navbar-brand">Articles</a>
                    <a href="{{ route('article', ['id'=>10]) }}" class="navbar-brand">Article</a>
                </div>

            </div>
        </nav>
{{--    @endsection--}}
{{--    @yield('navbar')--}}
        @show
<main role="main">


    @section('header')
        <div class="jumbotron">
            <div class="container">
                <h1>{{ $title }}</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>
    @show

    <div class="container">
    <div class="col-md-3">
        @section('sidebar')
        <div class="sidebar-module">
            <h2>Archives</h2>
            <ol class="list-unstyled">
                <li><a href="#">March 2021</a></li>
                <li><a href="#">April 2021</a></li>
                <li><a href="#">May 2021</a></li>
                <li><a href="#">March 2020</a></li>
                <li><a href="#">March 2019</a></li>
                <li><a href="#">October 2020</a></li>
                <li><a href="#">December 2020</a></li>
                <li><a href="#">March 2014</a></li>
                <li><a href="#">August 2018</a></li>
                <li><a href="#">June 2021</a></li>
                <li><a href="#">January 2021</a></li>
                <li><a href="#">December 2016</a></li>
            </ol>
        </div>
        @show
    </div>
{{--    </div>--}}

{{--    <div class="container">--}}
        <!-- Example row of columns -->
        @yield('content')
    </div>
        <hr>

    </div> <!-- /container -->

</main>

<footer class="container">
    <p>&copy; Company 2017-2018</p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>
