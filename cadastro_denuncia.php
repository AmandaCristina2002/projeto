<?php include("config.php");

 if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$bairro = $_POST['bairro'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$referencia = $_POST['referencia'];
	$data = $_POST['data'];
	$horario = $_POST['horario'];
	$descricao = $_POST['descricao'];
	$consulta = $MySQLi -> query("insert into TB_DENUNCIAS (DEN_NOME, DEN_CPF, DEN_BAIRRO, DEN_LOGRADOURO, DEN_NUMERO, DEN_REFERENCIA, DEN_DATA, DEN_HORARIO, DEN_DESCRICAO)
		values ('$nome', '$cpf', '$bairro', '$rua', '$numero', '$referencia', '$data', '$horario', '$descricao')");
    echo '<script> alert ("Denúncia feita com sucesso!"); location.href=("index.php")</script>';
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

	<title>Denúncia | Central de denúncias contra aglomeração</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Denunciar</h1>
							<p class="lead">
								Informe alguns dados para denunciar uma aglomeração.
							</p>
						</div>
						<!--Início do card com as informações de cadastro da denúncia-->
						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="?" method="POST">
						                <label class="form-label" style="font-size:17px;">Informações do(a) denunciador(a):</label>
						                <div class="mb-3">
						                    <label class="form-label" style="font-size:17px;">Nome completo</label>
						                    <input class="form-control form-control-lg" type="text" 
						                    name="nome" placeholder="Ex.:Ana Maria Braga">
						                    <p style="font-size:15px;">Você pode fazer uma denúncia como anônimo</p>
						               	</div>
						               	<div class="mb-3">
						                    <label class="form-label" style="font-size:17px;">CPF</label>
						                    <input class="form-control form-control-lg" type="text" id="cpf" name="cpf" placeholder="Ex.:123.456.789-01">
						                    <p style="font-size:15px;">Você pode fazer uma denúncia como anônimo</p>
						               	</div><br><br>
						               	<label class="form-label" style="font-size:17px;">Informações da aglomeração:</label>


					                    <div class="mb-3 col-md-12">
					                        <label class="form-label" style="font-size:17px;">Bairro</label>
					                        <input name="bairro" type="text" class="form-control" placeholder="Ex.:Maynard" required="required">
					                    </div>
					                    <div class="mb-3 col-md-12">
					                        <label class="form-label" style="font-size:17px;">Rua</label>
					                        <input name="rua" type="text" class="form-control" placeholder="Ex.:Rua Juarez Távora" required="required">
					                    </div>
					                    <div class="mb-3 col-md-12">
					                        <label class="form-label" style="font-size:17px;">Referência</label>
					                        <input name="referencia" type="text" class="form-control" placeholder="Ex.:Próximo a ASSEC" required="required">
					                    </div>
					                    <div class="row">
					                    	 <div class="mb-3 col-md-6">
					                        	<label class="form-label" style="font-size:17px;">N° da residência</label>
					                        	<input type="text" name="numero" class="form-control" placeholder="Ex.: 100 A" required="required">
					                    	</div>
					                      	<div class="mb-3 col-md-6">
					                        	<label class="form-label" style="font-size:17px;">Data da aglomeração</label>
					                        	<input name="data" id="data" type="date" class="form-control" required="required">
					                      	</div>				                      	
					                    </div>
					                   	<div class="mb-3 col-md-7">
				                        	<label class="form-label" style="font-size:17px;">Horário da aglomeração</label>
				                        	<input name="horario" id="horario" placeholder="20:00" type="text" class="form-control" required="required">
					                    </div><br><br>

					                    <label class="form-label" style="font-size:17px;">Descrição da aglomeração:</label>
					                    <div class="row">
					                   
					                        <textarea name="descricao" class="form-control" rows="10" cols="80" placeholder="Festa de aniversário com aproximadamente 40 pessoas presentes" required="required"></textarea>
					                      </div>
					                    </div>                      
					                    <div class="text-center mt-3">
					                      <button type="submit" class="btn btn-lg btn-danger" onclick="return confirm('Tem certeza que seus dados estão corretos?')" style="font-size:17px;background:firebrick;color:white;">Enviar</button>
					                    </div>
						              </form>
						                   <br>
								</div>
							</div>
						</div>
						<!--Fim do card com as informações de cadastro da denúncia-->

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	 <script> 
	    $(document).ready(function () { 
     	var $seuCampoCpf = $("#cpf");
  		 });
 	 </script>


    <script>
    $(document).ready(function () { 
      var $seuCampoCpf = $("#cpf");
      $seuCampoCpf.mask('000.000.000-00', {reverse: true});
    });
    </script>

  <script>
    $(document).ready(function () { 
      var $seuCampoCpf = $("#cpf");
      $seuCampoCpf.mask('000.000.000-00', {reverse: true});
    });
  </script>

   <script>
    $(document).ready(function () { 
      var $seuCampohorario = $("#horario");
    });
  </script>


  <script>
    $(document).ready(function () { 
      var $seuCampohorario = $("#horario");
      $seuCampohorario.mask('00:00', {reverse: true});
    });
  </script>

  <script>
    $(document).ready(function () { 
      var $seuCampohorario = $("00:00");
      $seuCampohorario.mask('00:00', {reverse: true});
    });
  </script>



</body>

</html>