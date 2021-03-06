<!-- Author: Jonny MacEachern  -->

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tweetmap</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" href="css/toastr.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Google Web Font -->
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

</head>
<body>

	<div class="container-fluid navbar-inverse">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href=" <?php $_SERVER['REQUEST_URI'] ?>">tweetmap</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a id="btn_mylocation" href="#" data-toggle="tooltip" data-placement="bottom" title="Tweets Near You "><span class="glyphicon glyphicon-screenshot"></span></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Change Style<b class="caret"></b></a>
					<ul class="dropdown-menu" id="styles">
						<li><a data-mapstyle="pale_dawn" href="#">Pale Dawn</a></li>
						<li><a data-mapstyle="blue_water" href="#">Blue Water</a></li>
						<li><a data-mapstyle="gowalla" href="#">Gowalla</a></li>
						<li><a data-mapstyle="flatmap" href="#">Flatmap</a></li>
						<li><a data-mapstyle="advocado_world" href="#">Advocado World</a></li>
						<li><a data-mapstyle="subtle_grayscale" href="#">Subtle Grayscale</a></li>
						<li class="divider"></li>
						<li><a href="http://snazzymaps.com" target="_new">More styles</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#" id="show_modal">Instructions</a></li>
						<li><a href="https://github.com/jonnymaceachern/tweetmap">View on GitHub</a></li>
						<li><a href="http://blog.jonny.me/using-the-twitter-api-1-1/">API Tutorial</a></li>
						<li class="divider"></li>
						<li><a href="http://jonny.me">Author</a></li>
					</ul>
				</li>
			</ul>
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input id="txt_keyword" type="text" class="form-control" placeholder="Search by keyword">
				</div>
				<button id="btn_keyword" keywordtype="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>

<!-- Instructions Modal -->
<div class="modal fade" id="instructionsModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-center">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-globe"></span>Instructions</h4>
			</div>
			<div class="modal-body">

			<p class="buffer-bottom">Tweetmap is a visual representation of what people are saying in your area. Just hover over an icon to see its message. Panning or zooming will update the map. It's suggested that you use the <kbd>TAB</kbd> key to cycle through crowded areas which contain overlapping tweets.</p>


			<div class="panel panel-default">
				<!-- Table -->
					<table class="table">

					<tr><th>Shortcut</th><th>Description</th></tr>

					<tr><td><kbd>TAB</kbd></td><td>Cycle through tweets</td></tr>
					<tr><td><kbd>Shift + TAB</kbd></td><td>Cycle backwards through tweets</td></tr>

					</table>
				</div>	

			</div>
			<div class="modal-footer">
				<label><input type="checkbox" name="dismiss">Don't show again</label>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Got it!</button>
			</div>
		</div>
	</div>
</div>



<!-- Controls -->
<input id="pac-input" class="controls" type="text" placeholder="Enter a location">

<!-- Map container -->
<div id="map"></div>

<!-- AJAX Loader -->
<div id="loader"></div>

<!-- jQuery -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/jquery.cookie.js" type="text/javascript"></script>
<script src="js/toastr.min.js" type="text/javascript"></script>

<!-- Bootstrap -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<!-- Google Maps API --> 
<!-- Note: the sensor value specifies whether or not you are using the users geolocation. This is required.-->
<script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=true&libraries=places"></script>

<!-- Map options -->
<script type="text/javascript" src="js/map.js"></script>

</body>
</html>