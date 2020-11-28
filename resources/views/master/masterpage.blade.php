<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>POS</title>
<link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="{{asset('assets')}}/css/styles.css" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Nambar -->
    @include('layouts.navbar')
    <!-- end navbar -->

<div id="wrapper">
    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- end Sidebar -->

    <div id="content-wrapper">
        @yield('content')
    <br><br><br>
    <!-- Sticky Footer -->
    @include('layouts.footer')
    <!-- end footer -->
    </div>
</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>
<!-- Modals -->
    @include('layouts.allmodals')
<!--End Modals -->
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.easing.min.js"></script>
<script src="{{asset('assets')}}/js/chart.min.js"></script>
<script src="{{asset('assets')}}/js/rc-pos.min.js"></script>
<script src="{{asset('assets')}}/js/chart-area-demo.js"></script>
<script src="{{asset('assets')}}/js/jquery.dataTables.js"></script>
<script src="{{asset('assets')}}/js/dataTables.bootstrap4.js"></script>
<script src="{{asset('assets')}}/js/rc-pos.min.js"></script>
<script src="{{asset('assets')}}/js/datatables-demo.js"></script>
<script src="{{asset('assets')}}/js/chart-area-demo.js"></script>
<script src="{{asset('assets')}}/js/chart-bar-demo.js"></script>
<script src="{{asset('assets')}}/js/chart-pie-demo.js"></script>
</body>
</html>
    