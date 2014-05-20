<?php
    $id = $_GET['logged'];
	if(empty($id))
		header('Location: login.html ');
	else {
?>
<!doctype html>
	<head>
		<meta charset="utf-8">
		<title>Registro HP Indigo</title>
		<link rel="stylesheet" href="registro.css">
		<link rel="shortcut icon" href="images/favicon.ico">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">

			<header>

				<div class="width clearfix">

                    <div class="columna c-7 medium-6 small-12">
                        <h1>HP Indigo Digital Press</h1>
                    </div>

                    <img class="columna c-2 medium-3 small-4 right" src="images/hp_logo.png" alt="">
                    <img class="columna c-3 medium-3 small-8 right agc" src="images/agc.jpg" alt="">

                </div><!-- width clearfix -->

			</header>

			<div class="main">
				<div id="registros" class="width clearfix">
				</div><!-- registros -->

				<div class="width clearfix">

					<a class="columna c-3 small-12 boton" href="php/DescargaCSV.php">Descarga archivo</a>

				</div><!-- width -->

			</div><!-- main -->

		</div><!-- container -->

		<footer>

		</footer>

	</body>

	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(e) {
            $.ajax({    //create an ajax request to load_page.php
				type: "GET",
				url: "php/MuestraRegistros.php",
				dataType: "html",   //expect html to be returned
				success: function(response){
				$("#registros").html(response);
				//alert(response);
				}
			});
        });
	</script>
</html>
<?php } ?>

