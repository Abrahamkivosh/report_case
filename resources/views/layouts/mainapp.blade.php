<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/images/favicon.png') }}">
    <title>Compaint | Management | System</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href=" {{ asset('/assets/node_modules/morrisjs/morris.css') }} " rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href=" {{ asset('/assets/node_modules/toast-master/css/jquery.toast.css') }} " rel="stylesheet">
    <!-- Custom CSS -->
    <link href=" {{ asset('/assets/dist/css/style.min.css') }} " rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href=" {{ asset('/assets/dist/css/pages/dashboard1.css') }} " rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout">
    <div id="main-wrapper">
        {{--  navbar  --}}
        @include('includes.header')


        {{--  left sidebar  --}}
        @include('includes.sidebar')


        {{--  page wrapper  --}}
        <div class="page-wrapper">

            {{--  container-fluid  --}}

            @yield('content')

            {{--  end of container fluid  --}}

        </div>

        {{--  end of page wrapper  --}}


        {{--  footer  --}}
        <footer class="footer">
            © {{ date('Y') }} Complaint Management System
        </footer>

    </div>
    {{--  end wrapper  --}}

    {{--  all jquery  --}}
    <script src=" {{ asset('/assets/node_modules/jquery/jquery-3.2.1.min.js') }} "></script>
    <script src=" {{ asset('/assets/node_modules/popper/popper.min.js') }} "></script>
    <script src=" {{ asset('/assets/node_modules/bootstrap/dist/js/bootstrap.min.js') }} "></script>
    <script src=" {{ asset('/assets/ dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src=" {{ asset('/assets/dist/js/waves.js') }} "></script>
    <script src=" {{ asset('/assets/dist/js/sidebarmenu.js') }} "></script>
    <script src=" {{ asset('/assets/dist/js/custom.min.js') }} "></script>
    <script src=" {{ asset('/assets/node_modules/raphael/raphael-min.js') }} "></script>
    <script src=" {{ asset('/assets/node_modules/morrisjs/morris.min.js') }} "></script>
    <script src=" {{ asset('/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js') }} "></script>
    <script src=" {{ asset('/assets/node_modules/toast-master/js/jquery.toast.js') }} "></script>
    <script src=" {{ asset('/assets/dist/js/dashboard1.js') }} "></script>
    <script src=" {{ asset('/assets/node_modules/toast-master/js/jquery.toast.js') }} "></script>
</body>

</html>
