<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bimal Souvenirs Admin </title>

    <!-- Bootstrap Core CSS -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	
    <![endif]-->

<style type="text/css" media="screen">
	
body{
    background-color: white;
}
#topdiv{
    border: 0.5px solid white ;
    height: 20px;
}
#midDiv{
    background-color: white;
}
.sideDiv{
 
}
a:focus, a:hover {
    text-decoration: none !important;
}
.thumbnail:hover{
    border: 2px solid grey;
}

html {
  font-size: 14px;
}

</style>	
    <!-- jQuery -->

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset("/bootstrap/js/jquery-2.2.4.min.js")}}"></script>
	<script src="{{asset("/bootstrap/js/bootstrap.min.js")}}"></script>
	<link href="{{asset("/bootstrap/css/animate.css")}}" rel="stylesheet">
    <link href="{{asset("/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="print" href="{{asset("/vendor/bootstrap/css/print.css")}}"> 
    <!-- MetisMenu CSS -->
    <link href="{{asset("/vendor/metisMenu/metisMenu.min.css")}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset("/dist/css/sb-admin-2.css")}}" rel="stylesheet">
	<link href="{{asset("/dist/css/pagination.css")}}" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="{{asset("/vendor/morrisjs/morris.css")}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset("/vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
			<a class="navbar-brand" href="{{ url('/') }}">Admin Settings</a>

            </div>

            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
			@if (Auth::guest())
				 <li><a href="{{ route('login') }}">Login</a></li>
			 @else


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span>{{Auth::user()->name}}</span>    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout
			
									</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
				<li> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                <!-- /.dropdown -->
			@endif
            </ul>
            <!-- /.navbar-top-links -->
						
			@section('navbar')
	
			@include('nav')
	
			
			@show
				
        </nav>


	
	    <div class="row">
        <div class="col-lg-2 col-md-2 col-xs-2 sideDiv">
		@section('sideDivl')
		@show


		</div>
		
        <div class="col-lg-8 col-md-8 col-xs-8" id="midDiv">
		 <ul style="color:red;font-size:14px">
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
		</ul>
		@yield('content')
	    </div> <!-- /.col-md-8 midDIv -->
        <div class="col-lg-2 col-md-2 col-xs-2 sideDiv">
		@section('sideDivl')
		@show	

		</div>		
		</div> <!-- /.row -->
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


	
	
    <!-- Scripts -->

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset("/vendor/metisMenu/metisMenu.min.js")}}"></script>



    <!-- Custom Theme JavaScript -->
    <script src="{{asset("/dist/js/sb-admin-2.blade.php.js")}}"></script>
	<script src="{{asset("/dist/js/pagination.js")}}"></script>
</body>

</html>
