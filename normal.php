<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Usuario normal</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		body {
			margin:0;
			padding: 0;
		}
		iframe {
			width: 100%;
			max-width: 720px;
			height: 100vh;
			max-height: 1280px;
			border: none;
			margin: auto;
			margin-top: 0;
			overflow: auto;
		}
	</style>
</head>
<body style="background: #ddd;">
	<!-- Aqui se coloca el iframe que contendra el juego que queremos mostrar -->
	<script type="text/javascript">
		var urlToRedirect = './gracias_normal.php';
	</script>
	<div align="center">
		<iframe src="./myGame/instrucciones.html?<?php echo date('YmdHis'); ?>" frameborder="0" width="100%">
		</iframe>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script type="text/javascript">
		/*$(function(){
			var anchoOriginal 	= 720;
			var altoOriginal 	= 1280;
			
			var hScreen 		= $(window).height();
			var wScreen 		= $(window).width();

			console.log( hScreen, wScreen );

			if ( wScreen >= 1024 ) {
				var newWidth = ( hScreen * anchoOriginal ) / altoOriginal;
				$('iframe').width( newWidth );
			}

		});*/
	</script>
</body>
</html>