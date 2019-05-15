<!DOCTYPE html>


<html>
<head>
<script src="{{ mix('js/app.js')}}"></script>
<script src="{{ mix('js/combine.js')}}"></script>
<link href = "{{ mix('css/combine.css') }}" rel="stylesheet" />
<link href = "{{ mix('css/app.css') }}" rel="stylesheet" />
    <title>
    @yield('title', 'Steve')
    </title>
</head>

    <body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="col-md-3 text-center nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="col-md-3 text-center nav-link" href="/projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="col-md-3 text-center nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="col-md-3 text-center nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>

    </nav>

    @yield('content')

    </body>
</html>