
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="{{ public_path() }}/favicon.ico">

		

		<!-- Bootstrap core CSS -->
		<link href="{{ Config::get('custom_path.css') }}/bootstrap.min.css" rel="stylesheet">
		<link href="{{ Config::get('custom_path.css') }}/style.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="jumbotron.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		@yield('content_title')
	</head>

	<body>

		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ action('HomeController@index') }}">LOGO</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav"> <!--navbar-right-->
						<li><a class="text" href="">HOME</a></li>
						<li>
							<a href=""><img src="{{ Config::get('custom_path.images') }}/home/pemberitahuan.png" alt=""></a>
						</li>
						<li>
							<a href=""><img src="{{ Config::get('custom_path.images') }}/home/pesan.png" alt=""></a>
						</li>
						<li>
							<a href=""><img src="{{ Config::get('custom_path.images') }}/home/teman.png" alt=""></a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right"> <!--navbar-right-->
						<li>
						<form action="" method="get" class="navbar-form navbar-right">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search...">
								<button type="submit" class="btn">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</div>
						</form>
						</li>
						<li>
							<a href=""><img src="{{ Config::get('custom_path.images') }}/home/profil.png" alt=""></a>
						</li>
						<li>
							<a href=""><span class="glyphicon glyphicon-cog"></span></a>
						</li>
					</ul>
				</div><!--/.navbar-collapse -->
			</div>
		</nav>

		

		@yield('content')


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="{{ Config::get('custom_path.js') }}/jquery-1.11.3.min.js"></script>
		<script src="{{ Config::get('custom_path.js') }}/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
		@yield('content_js')
	</body>
</html>
