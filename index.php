<?php 
session_start();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="invoker.css">
</head>
<body>
	<main class="principal">

		<div class="sombra-trans centralizado">
			<h1 class="maiusculo">Invocados</h1>
		</div>
		<div class="pacote centralizado">
			<div class="destaque caixa-azul">
				<a href="sum.php">
					<div>Verificar invocador (1.0)</div>
				</a>
			</div>
		</div>
		<div class="pacote centralizado">
			<div class="destaque caixa-azul">
				<a href="invoker.php">
					<div>Analisar invocador (2.0)</div>
				</a>
			</div>
		</div>

		</div>
		<div class="borda">
			<p class="centralizado" style="padding: 50px;">Teste de borda</p>
		</div>
		<div class="centralizado">
			<p><h1 class="texto-borrado">Testando borrado</h1></p>
		</div>

	</main>
</body>
</html>