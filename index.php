<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Central de denúncias contra aglomeração</title>
	<link href="css/app.css" rel="stylesheet">

</head>

<body>
	<div class="wrapper">
		<div class="main">
			<!--barra inícial-->
			<nav style="background-color:firebrick; height:70px;text-align:center;">
				<p style="color:white;font-size:30px;line-height:50px;padding-top: 12.5px;">
				CDCA: Central de Denúncias Contra Aglomeração</p>
			</nav>
			<!--barra inícial-->
			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-12">
							<!--Início do Carrossel-->
							<div class="card" style="top:15px">
								<div class="card-body m-sm-3 m-md-5">						
									<center><div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 350px; width:650px;">
										<ol class="carousel-indicators">
											<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img class="d-block w-100" src="img/primeira.png">
											</div>
											<div class="carousel-item">
												<img class="d-block w-100" src="img/segunda.png" alt="Segundo Slide">
											</div>
											<div class="carousel-item">
												<img class="d-block w-100" src="img/terceira.png" alt="Terceiro Slide">
											</div>
										</div>
										<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Anterior</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Próximo</span>
										</a>
									</div></center>
									<div class="text-center">
										<a href="cadastro_denuncia.php" class="btn btn-danger btn-lg btn-block mt-3" style="background:firebrick; font-size: 25px;color:white;">Denunciar</a>
									</div>
								</div>
							</div>
							<!--Fim do Carrossel-->
						</div>
					</div>
				</div>
			</main>
			<nav class="navbar navbar-expand navbar-light navbar-bg" style="background-color:firebrick; height:70px;">
				<a class="sidebar-toggle d-flex" href="login.php" style="font-size:15px;"><font color="white">ADM</font></a>
			</nav>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>