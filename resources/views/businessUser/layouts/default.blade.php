<!doctype html>
<html>
<head>
    @include('businessUser.includes.head')
</head>
<body>
{{--<div class="container">--}}
<div class="container-fluid ">
    <header class="row">

        @include('businessUser.includes.header')
    </header>

    <div id="main" class="row">

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-1">
            @include('businessUser.includes.sidebar')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-11">
            @yield('content')
        </div>

    </div>

    <footer class="row border-top fixed-bottom">
        @include('businessUser.includes.footer')
    </footer>

</div>
</body>
</html>