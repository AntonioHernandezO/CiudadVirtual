<?php
$pdo = new PDO("mysql:dbname=character;host=localhost","root","");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Monitos</title>
	<!-- meta character set -->
	<meta charset="UTF-8">
	<head runat="server">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/Cubexy.js"></script>
	</head>

	<body id="page-top" name="page-top" class="active">
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">

				<div class="navbar-header">
					<button button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Navegacion</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" rel="home" href="#" title="Buy Sell Rent Everyting">
						<img style="max-width:100px; margin-top: -7px;"
						src="//www.google.com/favicon.ico">
					</a>
				</div>

				<div id="navbar" class="collapse navbar-collapse navbar-responsive-collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Inicio</a></li>
						<li><a href="about.php">Nosotros</a></li>
						<li><a href="contact.php">Contacto</a></li>
						<li class="active">
							<a href="gallery.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galeria</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
	<center>
		<div class="">
			<div class="row text-center">
				<br>
				<br>
				<br>
				<br>
				<h4>Galeria</h4>
				<br>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<br>
				<?php 
				$sql = $pdo->prepare("SELECT DISTINCT People.People FROM `people` ");
				$sql -> execute();
				foreach ($sql as $key) {
					if($key['People'] == "BackGround"){

					}else{
						echo "
						<div class='col-md-3 col-sm-4 col-xs-6'>
						<a href='character.php?character=".$key['People']."'>
						<img class='img-responsive' src='gallery/".$key['People'].".png' />
						</a>
						</div>
						";
					}
				}
				?>			
			</div>
		</center>
	</div>
</body>
</html>