<?php include("config.php");
  include("verificar.php");
  $codigo = $_GET['codigo'];
  if(isset($_POST['numero'])) {
  	$codDen = $_POST['codDen'];
  	$nome = $_POST['nome'];
  	$cpf = $_POST['cpf'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $referencia = $_POST['referencia'];
    $pol = $_POST['pol'];
    $consulta = $MySQLi->query("UPDATE TB_DENUNCIAS set DEN_NOME='$nome', DEN_CPF='$cpf', DEN_BAIRRO = '$bairro', DEN_LOGRADOURO = '$rua', DEN_NUMERO = '$numero', DEN_REFERENCIA = '$referencia',  DEN_POL_CODIGO = '$pol' where DEN_CODIGO = $codDen");
    header("Location: central.php");
  }
  $consultaDen = $MySQLi->query("SELECT * FROM TB_DENUNCIAS WHERE DEN_CODIGO = $codigo");
  $resultadoDen = $consultaDen->fetch_assoc();
  $consulta2 = $MySQLi->query("SELECT * FROM TB_POLICIAIS");
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

	<title>Editar denúncia | Central de denúncias contra aglomeração</title>
	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Informações da denúncia</h1>
							<p class="lead">
								Dados do local da aglomeração
							</p>
						</div>
						<!--Início do card com as informações de editar denúncia-->
						<div class="card">
							<div class="card-body">
								<div class="m-sm-5">
									<form action="?" id="formID" method="POST">
										<div class="row">
											<div class="mb-3 col-md-12">
												<label class="form-label">Possíveis policiais</label>
												<select name="pol" class="form-control">
							                      <?php while ($resultado = $consulta2 -> fetch_assoc()) { ?>
							                        <option value="<?php echo $resultado['POL_CODIGO'] ?>">
							                          <?php if ($resultado['POL_CODIGO'] == $resultadoDen['DEN_POL_CODIGO']) {
							                            echo "";
							                          } ?>
							                          <?php echo $resultado['POL_NOME']; ?>
							                        </option>
							                      <?php } ?>
							                    </select>
											</div>
										</div>
										<div class="mb-3 col-md-12">
											<label class="form-label">Bairro</label>
											<input type="text" class="form-control" READONLY STYLE="pointer-events: none;" placeholder="Bairro" value="<?php echo $resultadoDen['DEN_BAIRRO']; ?>" name="bairro">
										</div>		
										<div class="mb-3 col-md-12">
											<label class="form-label">Rua</label>
											<input type="text" class="form-control" READONLY STYLE="pointer-events: none;" placeholder="Rua" value="<?php echo $resultadoDen['DEN_LOGRADOURO']; ?>" name="rua">
										</div>
										<div class="mb-3 col-md-12">
											<label class="form-label">Referência</label>
											<input type="text" class="form-control" READONLY STYLE="pointer-events: none;" placeholder="Ponto de referência" value="<?php echo $resultadoDen['DEN_REFERENCIA']; ?>" name="referencia">
										</div>
											
										
										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label">N° residência</label>
												<input type="text" class="form-control"READONLY STYLE="pointer-events: none;" placeholder="Número da casa" value="<?php echo $resultadoDen['DEN_NUMERO']; ?>" name="numero">
											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label">Horário da ocorrência</label>
												<input type="text" class="form-control" READONLY STYLE="pointer-events: none;" value="<?php echo $resultadoDen['DEN_HORARIO']; ?>" name="horario">
											</div>
										</div>
										<?php 
											$dataconvertida = implode("/",array_reverse(explode("-",$resultadoDen['DEN_DATA'])));
										?>
										<div class="mb-3 col-md-6">
											<label class="form-label">Data da ocorrência</label>
											<input type="text" class="form-control" READONLY STYLE="pointer-events: none;" placeholder="data" value="<?php echo $dataconvertida; ?>" name="data">
										</div>
										<div class="mb-3 col-md-6">
											<input type="hidden" class="form-control" name="codDen" value="<?php echo $resultadoDen['DEN_CODIGO']; ?>" READONLY STYLE="pointer-events: none;">
										</div>
										<div class="row">
											<div class="mb-3 col-md-12">
												<label class="form-label">Descrição</label>
												<p class="form-control" READONLY STYLE="pointer-events: none;" placeholder="Descrição da aglomeração" name="descricao"><?php echo $resultadoDen['DEN_DESCRICAO']; ?></p>
											</div>
										</div>								
										<div class="text-center mt-3">
											<button type="submit" name="send" id="send" class="btn btn-lg" style="font-size:17px; background:firebrick;color:white;" onclick="return confirm('Tem certeza que seus dados estão corretos?')"> Salvar </button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!--Fim do card com as informações de editar denúncia-->

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
		var formID = document.getElementById("formID");
		var send = $("#send");

		$(formID).submit(function(event){
  		if (formID.checkValidity()) {
    	send.attr('disabled', 'disabled');
  		}
		});

	</script>

</body>

</html>