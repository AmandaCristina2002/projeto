<?php 
include("config.php");
include("verificar.php");
$codigo = $_GET['codigo'];
$consulta = $MySQLi->query("SELECT * FROM TB_DENUNCIAS JOIN TB_POLICIAIS ON DEN_POL_CODIGO = POL_CODIGO WHERE POL_CODIGO=$codigo");
$consulta2 = $MySQLi->query("SELECT * FROM TB_POLICIAIS");
$consultaDen = $MySQLi->query("SELECT * FROM TB_DENUNCIAS JOIN TB_POLICIAIS ON DEN_POL_CODIGO = POL_CODIGO WHERE POL_CODIGO=$codigo");
$resultadoDen = $consultaDen->fetch_assoc();

?><!--Parte inicial-->
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	
	<title>Página policial | Central de denúncias contra aglomeração</title>
	<link href="css/app.css" rel="stylesheet">

	<style type="text/css">
		
		a.bg-red{
			background:firebrick; 
		}
		div.bg-red{
			background:firebrick; 
		}

	</style>
</head>

<body>
	<div class="wrapper" >
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar bg-red">
				<a class="sidebar-brand">
					<a href="central.php" class="sidebar-brand">
						<span class="align-middle">Central de Denúncias</span>
					</a>
				


				<ul class="sidebar-nav">
					<li class="sidebar-header" >
						<h4 style="color:white">Policiais:</h4>
					</li>
					<?php while ($resultado2 = $consulta2->fetch_assoc()){?>
						<li class="sidebar-item "><!--active-->
							<a class="sidebar-link bg-red" href="policial.php?codigo=<?PHP echo $resultado2['POL_CODIGO']; ?>">
								<i class="align-middle" data-feather="user" style="color:white;"></i><span class="align-middle" style="color:white;"><?php echo $resultado2['POL_NOME'];?></span>
							</a>
						</li>
					<?php } ?>

				</ul>
			</div>
		</nav>

			<div class="main">
				<nav class="navbar navbar-expand navbar-light navbar-bg">
					<a class="sidebar-toggle d-flex">
						<i class="hamburger align-self-center"></i>
					</a>

					<form  method="POST"  action="index1.php" class="d-none d-sm-inline-block">
						<div class="input-group input-group-navbar">
							<input name="pesquisar" type="text" class="form-control" placeholder="Pesquisar…" aria-label="Search">
							<input type="submit" class="form-control">		
						</div>
					</form>

					<div class="navbar-collapse collapse">
						<ul class="navbar-nav navbar-align">
							<li class="nav-item dropdown">
								<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
									<i class="align-middle" data-feather="settings"></i>
								</a>
								<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
									<span class="text-dark">ADM</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="sair.php">Sair</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>

				<main class="content">
					<div class="container-fluid p-0">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<?php while ($resultado = $consulta->fetch_assoc()) { ?>
											<?php if($resultado['DEN_CONCLUIDO'] != '1'){?>
												<div class="col-12 col-md-5 col-lg-5 border border-dark" style="float:left;margin-top: 10px;margin-bottom: 10px;margin-right: 25px;margin-left: 25px;">
													<div class="card">
														<div class="card-body">
															<i data-feather="circle" style="color:black;width: 10px; height: 10px;" ></i><span class="card-text" style="font-size: 17px"> Bairro da ocorrência: <?php echo $resultado['DEN_BAIRRO']; ?></span><br>
															<i data-feather="circle" style="color:black;width: 10px; height: 10px;" ></i><span class="card-text" style="font-size: 17px"> Rua da ocorrência: <?php echo $resultado['DEN_LOGRADOURO']; ?></span><br>
															<i data-feather="circle" style="color:black;width: 10px; height: 10px;" ></i><span class="card-text" style="font-size: 17px"> Nº da Residência: <?php echo $resultado['DEN_NUMERO']; ?></span><br>
															<i data-feather="circle" style="color:black;width: 10px; height: 10px;" ></i><span class="card-text" style="font-size: 17px"> Ponto de referência: <?php echo $resultado['DEN_REFERENCIA']; ?></span><br>
															<?php 
															$dataconvertida = implode("/",array_reverse(explode("-",$resultado['DEN_DATA'])));
															?>
															<i data-feather="circle" style="color:black;width: 10px; height: 10px;" ></i><span class="card-text" style="font-size: 17px"> Data da ocorrência: <?php echo $dataconvertida; ?></span><br><br>
															<a href="confirmar.php?codigo=<?PHP echo $resultado['DEN_CODIGO']; ?>"><button type="button" class="btn btn-lg" style="float:right;background:firebrick;color:white;">Marcar conclusão</button></a>
														</div>
													</div>
												</div>
											<?php }
										} ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</main>

				<footer class="footer" >
					<div class="container-fluid">
						<div class="row text-muted">
							<div class="col-6 text-left">
								<p class="mb-0">
									<strong>Central de denúncia</strong> &copy;
								</p>
							</div>

						</div>
					</div>
				</footer>
			</div>
		</div>
		<script src="js/app.js"></script>
	</body>
	</html>
<!--Parte final-->