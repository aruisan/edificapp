<!Doctype html>

<html lang="ES">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Edificapp</title>

    	<!--Llamamos al archivo css a través de CDN-->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    	
    	<link rel="stylesheet" href="../css/style.css">

    	<link rel="stylesheet" href="../css/jquery.steps.css">

    	<!-- Llamamos al css de la libreria select2-->
    	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

	</head>

	<body>
			<div class="formulario container col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
					 @yield('content')
			</div><!--formulario-->
	</body>
	<!-- JQuery CDN-->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    	
    	<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!--Llamamos al archivo Font Awesome CDN-->
    	<script src="https://use.fontawesome.com/bb6d0f8827.js"></script>

    	<!--script select2-->	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

		<!--script steps-->	
		<script type="text/javascript" src="../js/jquery.steps.js"></script>

		<!--script owlcarousel-->	
		<script type="text/javascript" src="../js/owl.carousel.js"></script>

		<script type="text/javascript" src="../js/javascript.js"></script>

		<!--script maps-->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA7eOJkGoZwWlSiCIbEltXu4ljUhw1Ftg&callback=initMap"></script>
</html>