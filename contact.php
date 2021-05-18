<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>

<!-- //js -->
<!-- web-fonts -->


<!-- //web-fonts -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();

			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling -->
</head>
<body>
<!-- header -->
<div class="header">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">

				<h1><a  href="index.php">el refinamiento de la</a></h1>
			</div>
			<!-- top-nav -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" >Inicio</a></li>
					<li><a href="blog.php">Artículo</a></li>
					<li><a href="single.php" >Artículo</a></li>
					<li><a href="contact.php" class="active">Contactos</a></li>
					<li><a href="policy.php" >Política de privacidad</a></li>
					<li><a href="terms.php">Términos y condiciones</a></li>
				</ul>

			</div>
		</nav>
	</div>
</div>
<!-- //header -->
<!-- banner -->


	<!-- //banner -->
	<!-- contact -->
	<div class="contact agileits">
		<div class="container">
			<div class="w3ls-title">
				<h3>Contactos</h3>
			</div>   
			<div class="contact-grids">
				<div class="col-md-7 contact-form">
					<form action="thanks.php" method="post">
						<input type="text" name="Name" placeholder="El nombre de" required="">
						<input class="email" type="text" name="Email" placeholder="Email" required="">
						<input class="email" type="text" name="Phone" placeholder="El número de teléfono" required="">
						<textarea placeholder="" name="Message" required=""></textarea>
						<input type="checkbox" name="terms" value="check" required=""/>
						<a href="policy.php" target="_blank">
							He leído y estoy de acuerdo con los términos del acuerdo de usuario
						</a>
						<input type="submit" value="Enviar">
					</form>
				</div>
				<div class="col-md-4 contact-right">
					<div class="contact-text">
						<p> Paseo Hidalgo, 1, 35º 9º, 11065, San Dávila del Puerto</p>
						<p>	+7046124934467 </p>
						<p>abeyta.alba@live.com</p>
					</div> 
				</div> 
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!-- //contact --> 
	<!-- map -->

<!-- //map -->
<!-- footer -->
<div class="footer" style="margin-top: 180px">
	<div class="container">
		<h3><a href="index.php">el refinamiento de la</a></h3>
		<p> Copyright &copy;<script>document.write(new Date().getFullYear());</script>
			All rights reserved</p>
	</div>
</div>
<!-- //footer -->
<div class='cookie-banner'>
	<p>
		El sitio web utiliza "cookies". Permiten identificarlo y recibir su información de la experiencia del usuario.Continuando con la navegación de la web, estoy de acuerdo con el uso de las cookies, el propietario del sitio de conformidad con  <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie">Política de cookies</a>
	</p>
	<button class='close-cookie'>&times;</button>
</div>
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {

		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
		};

		$().UItoTop({ easingType: 'easeOutQuart' });

	});
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>

<script>
	window.onload = function () {
		$('.close-cookie').click(function () {
			$('.cookie-banner').fadeOut();
		})
	}
</script>
<script>
	let elems = document.querySelectorAll('.server-name');
	elems.forEach((elem) => {
		elem.innerHTML = window.location.hostname
	})
</script>
</body>
</html>