
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Sales Admin | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}" />
    <script src="{{ asset('assets/js/loader.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    @if(Cookie::get('dark_mode') == '1')
    <link href="{{ asset('dark/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dark/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dark/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dark/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dark/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dark/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dark/assets/css/components/tabs-accordian/custom-tabs.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dark/assets/css/forms/switches.css') }}">
    <link href="{{ asset('dark/plugins/pricing-table/css/component.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dark/assets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dark/plugins/notification/snackbar/snackbar.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dark/assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />
    @elseif(Cookie::get('dark_mode') == '0')
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/components/tabs-accordian/custom-tabs.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/switches.css') }}">
    <link href="{{ asset('assets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/notification/snackbar/snackbar.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/pricing-table/css/component.css') }}" rel="stylesheet" type="text/css" />
    @endif
    @if (Route::is('datatable') && (Cookie::get('dark_mode') == '1'))
        <link rel="stylesheet" type="text/css" href="{{ asset('dark/plugins/table/datatable/datatables.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('dark/plugins/table/datatable/dt-global_style.css') }}">
        @elseif(Route::is('datatable'))
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/dt-global_style.css') }}">
    
   @endif
    @if (Route::is('sales') && (Cookie::get('dark_mode') == '1'))
        <link href="{{ asset('dark/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
        
    @elseif(Route::is('sales') && (Cookie::get('dark_mode') == '0'))
    <link href="{{ asset('assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
        
    @endif
    @if (Route::is('analytics') && (Cookie::get('dark_mode') == '1'))
    <link href="{{ asset('dark/assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
    
    @elseif(Route::is('analytics') && (Cookie::get('dark_mode') == '0'))
    <link href="{{ asset('assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
     @endif 
   
</head> 

<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    @include('inc.navbar')
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>


        @include('inc.sidebar')

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">

            @yield('content')
        </div>
        <!--  END CONTENT PART  -->
    </div>
    <!-- END MAIN CONTAINER -->
    @include('inc.footer')
    @include('inc.scripts')
</body>
</html>
