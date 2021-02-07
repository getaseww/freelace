<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
.page-footer{
    background-color:springgreen;
}
.h5{
    color:black;
}
.ul.li.a{
    color: black;
}
.p.a{
    color: black;
}

</style>

<body>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
    
        <!-- Grid row -->
        <div class="row mt-3">
    
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
    
            <!-- Content -->
            <h6 class="text-uppercase font-weight-bold pt-lg-5">Freelancer</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>Freelancer is a web based system which aims at connecting freelancers and employers in on place </p>
    
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
    
            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold pt-lg-5">Services</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
            <a href="/posts/create">Post Jobs</a>
            </p>
            <p>
            <a href="/freelancer">Hire freelancers</a>
            </p>
            <p>
            <a href="/jobs">Get jobs</a>
            </p>
    
        </div>
    
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
    
            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold pt-lg-5">Contact</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
            <i class="fas fa-home mr-3"></i>ASTU</p>
            <p>
            <i class="fas fa-envelope mr-3"></i>freelancer@gmail.com</p>
            <p>
            <i class="fas fa-phone mr-3"></i> + 251946865278</p>
            <p>
            <i class="fas fa-print mr-3"></i> +251952748790 </p>
            <p>
                <i class="fas fa-print mr-3"></i> +251-958545676 </p>
    
        </div>

        </div>
        
    </div>

    
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright: by freelancer
    </div>
    <!-- Copyright -->
    
    </footer>
    <!-- Footer -->
</body>
<html>
