<?php
  include("config.php");
  $msg = 0;
  if(isset($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $consulta1 = $MySQLi->query("SELECT * FROM TB_ADMINISTRADORES where ADM_EMAIL = '$email' and ADM_SENHA = '$senha'");
    if($resultado1 = $consulta1->fetch_assoc()){
      $_SESSION['codigo'] = $resultado1['ADM_CODIGO'];
      $_SESSION['nome'] = $resultado1['ADM_NOME'];
      $_SESSION['cpf'] = $resultado1['ADM_CPF'];
      header("Location: central.php");
    }
    $msg = 1;
  }
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">


	<title>Login | Central de denúncias contra aglomeração</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Bem vindo, essa é a central de denúncias contra aglomeração</h1>
							<p class="lead">
								Faça login para continuar
							</p>
						</div>
						<!--Início do card das informações de login-->
						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="?" method="POST">
										<?php if($msg==1) echo "<span style='text-align: center; color:red'>Usuário ou senha inválida!</span>"; ?>
										<div class="mb-3">
											<label class="form-label" style="font-size: 20px;">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Digite seu E-mail" />
										</div>
										<div class="mb-3">
											<label class="form-label" style="font-size: 20px;">Senha</label>
											<input class="form-control form-control-lg" type="password" name="senha" placeholder="Digite sua senha " />
										</div>
										<div class="text-center mt-3">
											<br>
                    						<button class="btn btn-danger btn-lg" style="font-size: 20px;background:firebrick;color:white;"> Login </button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!--Fim do card das informações de login-->
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>