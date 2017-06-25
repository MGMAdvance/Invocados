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
					<div>Verificar invocador</div>
				</a>
			</div>
		</div>
		
	</main>
</body>
</html>