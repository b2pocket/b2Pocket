<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>B2Pocket</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
	<link rel="stylesheet" href="{{ asset("assets/stylesheets/datatables.min.css") }}" />


</head>
<body>	
	<script src="{{ asset("assets/scripts/jquery-3.3.1.min.js") }}" type="text/javascript"></script>
	<script src="{{ asset("assets/scripts/jquery-ui.min.js") }}" type="text/javascript"></script>
	<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
	<script src="{{ asset("assets/scripts/datatables.min.js") }}" type="text/javascript"></script>

	
	

	@yield('body')

</body>
</html>