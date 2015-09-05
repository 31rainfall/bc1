<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>


    <header class="row">
        @include('includes.header')
    </header>

    <div class=" header-bg">
        @include('includes.top-business-area')

    </div>

    <div class="">
        @include('includes/feature-color-panel')

    </div>


    <div id="main" class="row">

        <!-- sidebar content -->
    {{--    <div id="sidebar" class="right large-4">
            @include('includes.sidebar')
        </div>--}}

        <!-- main content -->
        <div id="content" class="large-8">
            @yield('content')
        </div>

    </div>


        @include('includes.footer')



</body>
</html>