<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title>@yield('title')</title>
</head>
<body>
	<nav>
	    <div class="nav-wrapper red darken-3">
			<a href="{{ URL::to('/') }}" class="brand-logo">CC</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="sass.html">Sass</a></li>
				<li>
					<a href="{{ route('carrinho') }}">
					{{ Cart::count() }}
					<span style="padding-top: 20px" class="material-icons">shopping_cart</span>
					</a>
				</li>
			</ul>
	    </div>
  </nav>
	<div class="container">
		@yield('content')
	</div>

</body>
</html>