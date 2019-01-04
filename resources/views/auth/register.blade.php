<!DOCTYPE html>
<head>
<title>Admin Register | TLMS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href=" {{ asset('frontEnd/css/bootstrap.min.css') }} " >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
@stack('style')
<link href=" {{ asset('frontEnd/css/style.css') }} " rel='stylesheet' type='text/css' />
<link href=" {{ asset('frontEnd/css/style-responsive.css') }} " rel="stylesheet"/>
<!-- font-awesome icons -->
<link rel="stylesheet" href=" {{ asset('frontEnd/css/font.css') }} " type="text/css"/>
<link href=" {{ asset('frontEnd/css/font-awesome.css') }} " rel="stylesheet"> 
<link rel="stylesheet" href=" {{asset('frontEnd/css/morris.css')}} " type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href=" {{asset('frontEnd/css/monthly.css')}} ">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src=" {{ asset('frontEnd/js/jquery2.0.3.min.js') }} "></script>



<script src=" {{ asset('frontEnd/js/raphael-min.js') }} "></script>
<script src=" {{ asset('frontEnd/js/morris.js') }} "></script>

</head>
<body>
<br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-danger">
                <div class="panel-heading">Admin Registration</div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('register') }}">
                         {{ csrf_field() }}

                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name"required>
                        <br>
                        <label for="email">Email</label>
                         <input id="email" type="email" class="form-control" name="email"required>
                        <br>
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                        <br>
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        <br>
                        <input type="submit" class="btn btn-danger" value="Register">
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src=" {{ asset('frontEnd/js/bootstrap.js') }} "></script>
<script src=" {{ asset('frontEnd/js/jquery.dcjqaccordion.2.7.js') }} "></script>
<script src=" {{ asset('frontEnd/js/scripts.js') }} "></script>
<script src=" {{ asset('frontEnd/js/jquery.slimscroll.js') }} "></script>
<script src=" {{ asset('frontEnd/js/jquery.nicescroll.js') }} "></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src=" {{ asset('frontEnd/js/jquery.scrollTo.js') }} "></script>
<!-- morris JavaScript -->  
</body>
</html>
