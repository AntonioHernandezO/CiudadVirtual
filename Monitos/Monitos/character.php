	<?php 
	$character = $_GET['character'];
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
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery-2.1.4.min.js"></script>
			<script src="js/Cubexy.js"></script>
			<script type="text/javascript"></script>
			<script src="js/funtions.js"></script>
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
			<center>
				<div class="">
					<div class="row text-center">
						<br>

						<br>

						<br>

						<h4>Crear Tu personaje a tu imagen</h4>
					</div>

					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<!-- <img src="http://placehold.it/1170x300.jpg" alt="..."> -->
								<img src="https://placeholdit.imgix.net/~text?txtsize=40&bg=F2D44E&txtclr=ffffff&txt=SLIDE 1&w=1170&h=300" alt="...">
							</div>
						</div>

						<div class="row text-center">
							<h6>Iniciemos la creación 
								<br>
								<span>Comienza:</span></h6>
							</div>
						</div>
					</div>
				</center>
				<section id="packages">
					<div class="" style="float: middle;">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 p-0" style="float: middle; ">
								<center>
									<!--<span>Filtro de color (Selecciona una parte y aplica el filtro):</span>
										<input type="hidden" id="colores"  />-->
										<div>  
											<canvas width="720" height="576" id="canvas"></canvas>
											<br>
											<br>
											<a class="btn btn-warning" id="Descargar">Descargar</a>
											<a class="btn btn-success" id="Preview">Vista prevía</a>
										</center>
									</div>

									<div class="col-sm-6 col-md-6 col-lg-6" style="width: 45%;  float: auto;">

										

										<?php 
										$sql = $pdo->prepare("SELECT * FROM People WHERE People.People = '".$character."' AND People.Element = 'Skin'");
										$sql -> execute();
										$no=$sql->rowCount();
										if($no == 0){

										}else{
											?> 
											<div class="panel panel-default"> 
												<div class="panel-heading">
													<h3 class="panel-title">Tonos de piel <a style="float: right;"  type="button" aria-hidden="true"class="fa fa-times"  onclick ="skin_c()">  </a> <a style="float: right;"  type="button" aria-hidden="true"class="fa fa-check"  onclick ="skin_o()"></a> </h3>
												</div>
												<ul class="list-group">            
													<li class="list-group-item">
														<div class="" >
															<div class="fluid-row" >
																<div id="avatar">
																	<div id="piel" >
																		<?php 
																		foreach ($sql as $key) {
																			echo "<img width='60px' height='60px' src='monitos/".$key['Rute']."'/>";
																		}
																		?>
																	</div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<?php
										}
										?>

										<?php 
										$sql = $pdo->prepare("SELECT * FROM People WHERE People.People = '".$character."' AND People.Element = 'Hair'");
										$sql -> execute();
										$no=$sql->rowCount();
										if($no == 0){

										}else{
											?> 
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">Tipo de cabello <a style="float: right;"  type="button" aria-hidden="true"class="fa fa-times"  onclick ="hair_c()">  </a> <a style="float: right;"  type="button" aria-hidden="true"class="fa fa-check"  onclick ="hair_o()"></a> </h3>
												</div>   
												<ul class="list-group">            
													<li class="list-group-item">
														<div class="">
															<div class="fluid-row">
																<div id="avatar">
																	<div id="pelo">
																		<?php
																		foreach ($sql as $key) {
																			echo "<img width='60px' height='60px' src='monitos/".$key['Rute']."'/>";
																		}
																		?>
																	</div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<?php 
										} 
										?>

										<?php 
										$sql = $pdo->prepare("SELECT * FROM People WHERE People.People = '".$character."' AND People.Element = 'Eyes'");
										$sql -> execute();
										$no=$sql->rowCount();
										if($no == 0){

										}else{
											?>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">Tipo de ojos <a style="float: right;"  type="button" aria-hidden="true"class="fa fa-times"  onclick ="eyes_c()">  </a> <a style="float: right;"  type="button" aria-hidden="true"class="fa fa-check"  onclick ="eyes_o()"></a></h3>
												</div>   
												<ul class="list-group">            
													<li class="list-group-item">
														<div class="">
															<div class="fluid-row">
																<div id="avatar">
																	<div id="ojos">
																		<?php
																		foreach ($sql as $key) {
																			echo "<img width='60px' height='60px' src='monitos/".$key['Rute']."'/>";
																		}
																		?>
																	</div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<?php
										}
										?>

										<?php 
										$sql = $pdo->prepare("SELECT * FROM People WHERE People.People = '".$character."' AND People.Element = 'Clotes'");
										$sql -> execute();
										$no=$sql->rowCount();
										if($no == 0){

										}else{
											?>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">Tipo de ropa <a style="float: right;"  type="button" aria-hidden="true"class="fa fa-times"  onclick ="clothes_c()">  </a> <a style="float: right;"  type="button" aria-hidden="true"class="fa fa-check"  onclick ="clothes_o()"></a> </h3>
												</div>   
												<ul class="list-group">            
													<li class="list-group-item">
														<div class="">
															<div class="fluid-row">
																<div id="avatar">
																	<div id="Ropa">
																		<?php
																		foreach ($sql as $key) {
																			echo "<img width='60px' height='60px' src='monitos/".$key['Rute']."'/>";
																		}
																		?>
																	</div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<?php 
										}
										?>

										<?php
										$sql = $pdo->prepare("SELECT * FROM People WHERE People.People = '".$character."' AND People.Element = 'Acces'");
										$sql -> execute();
										$no=$sql->rowCount();
										if($no == 0){

										}else{
											echo("
												<div class='panel panel-default'>
												<div class='panel-heading'>
												<h3 class='panel-title'>Accesorios <a style='float: right;'  type='button' aria-hidden='true'class='fa fa-times'  onclick ='acces_c()'>  </a> <a style='float: right;'  type='button' aria-hidden='true'class='fa fa-check'  onclick ='acces_o()'></a></h3>
												</div>   
												<ul class='list-group'>            
												<li class='list-group-item'>
												<div class=''>
												<div class='fluid-row'>
												<div id='avatar'>
												<div id='acesorios'>
												");
											foreach ($sql as $key) {
												echo "<img width='60px' height='60px' src='monitos/".$key['Rute']."'/>";
											}
											echo ("
												</div>
												</div>
												</div>
												</div>
												</li>
												</ul>
												</div>
												");

										}
										?>

										<?php 
										$sql = $pdo->prepare("SELECT * FROM People WHERE People.People = '".$character."' AND People.Element = 'Shoes'");
										$sql -> execute();
										$no=$sql->rowCount();
										if($no == 0){

										}else{
											?>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">Zapatos <a style="float: right;"  type="button" aria-hidden="true"class="fa fa-times"  onclick ="mouth_c()">  </a> <a style="float: right;"  type="button" aria-hidden="true"class="fa fa-check"  onclick ="mouth_o()"></a></h3>
												</div>   
												<ul class="list-group">            
													<li class="list-group-item">
														<div class="">
															<div class="fluid-row">
																<div id="avatar">
																	<div id="Boca">
																		<?php
																		foreach ($sql as $key) {
																			echo "<img width='60px' height='60px' src='monitos/".$key['Rute']."'/>";
																		}
																		?>
																	</div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<?php 
										}
										?>

										<?php 
										$sql = $pdo->prepare("SELECT * FROM People WHERE People.Element = 'BackGround'");
										$sql -> execute();
										$no=$sql->rowCount();
										if($no == 0){

										}else{
											?>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">Fondo <a style="float: right;"  type="button" aria-hidden="true"class="fa fa-times"  onclick ="back_c()">  </a> <a style="float: right;"  type="button" aria-hidden="true"class="fa fa-check"  onclick ="back_o()"></a></h3>
												</div>   
												<ul class="list-group">            
													<li class="list-group-item">
														<div class="">
															<div class="fluid-row">
																<div id="avatar">
																	<div id="background_87">
																		<?php
																		foreach ($sql as $key) {
																			echo "<img width='60px' height='60px' src='monitos/".$key['Rute']."'/>";
																		}
																		?>
																	</div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<?php 
										}
										?>
										<center>
											<a href="gallery.php" class="btn btn-warning">Gallería</a>
										</center>

									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<br>
				<br>
				<script>
					$('#avatar').Cubexy();
				</script>
			</div>
		</div>

	</body>
	</html>