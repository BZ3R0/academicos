<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Acadêmicos</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/academicos.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	  	<div class="navbar-header">
	  	  <a class="navbar-brand" href="/">Acadêmicos</a>
	  	</div>
	  	<p class="navbar-text navbar-right"><a href="#" class="navbar-link">Login</a></p>
	  </div>
	</nav>

	<div id="topo" class="col-md-12 col-sm-12"></div>
	<div class="container-fluid">
		@yield('content')
	</div>

	<div class="navbar navbar-default navbar-fixed-bottom">
     <div class="container">
       <p class="navbar-text pull-left">© 2017 - Academicos</p>
     </div>


   </div>
	@yield('footer-script')
</body>
</html>
