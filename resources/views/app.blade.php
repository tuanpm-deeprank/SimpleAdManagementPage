
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adnetwork Administration</title>
 
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	
	<!-- Angular JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>  
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular-route.min.js"></script>

	<!-- MY App -->
	<script src="{{ asset('/app/packages/dirPagination.js') }}"></script>
	<script src="{{ asset('/app/routes.js') }}"></script>
	<script src="{{ asset('/app/services/myServices.js') }}"></script>
	<script src="{{ asset('/app/helper/myHelper.js') }}"></script>

	<!-- App Controller -->
        <script src="{{ asset('/app/controllers/AdController.js') }}"></script>
        <script src="{{ asset('/app/controllers/BannerController.js') }}"></script>
        <script src="{{ asset('/app/controllers/ItemController.js') }}"></script>
        <script src="{{ asset('/app/controllers/ClientController.js') }}"></script>
        <script src="{{ asset('/app/controllers/WebsiteController.js') }}"></script>
</head>
<body ng-app="main-App">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                            <a class="navbar-brand" href="#"><img width=30 src="logo.jpg"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#/">Home</a></li>
                                        <li><a href="#/clients">Advertisers</a></li>
                                        <li><a href="#/websites">Publishers</a></li>
					<li><a href="#/ads">Ads</a></li>
                                        <li><a href="#/banners">Banners</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<ng-view></ng-view>
	</div>

	<!-- Scripts -->

</body>
</html>
