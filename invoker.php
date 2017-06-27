<?php
require_once('func.php');
	if (!empty($_GET['nome']) || !empty($_GET['region'])) {


		$API = 'https://'.$_GET['region'].'.api.riotgames.com/lol/summoner/v3/summoners/by-name/'.urlencode($_GET['nome']).'?api_key=<API_KEY>';

		$sobreInvocador = json_decode(file_get_contents($API), TRUE);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo !empty($sobreInvocador['name']) ? $sobreInvocador['name'] : 'Aguardando invocador' ; ?></title>
	<link rel="stylesheet" type="text/css" href="\BST\css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="invoker-modify.css">
</head>
<body>
<div>
	<div class="caixa-sombra" style="top: 0px;left: 0px;right: 0px;bottom: initial;">
		<h1>
		<img class="destaque" src="<?php echo pegarIcone(!empty($_GET['nome']), !empty($_GET['region'])) ?>">
		<?php echo !empty($sobreInvocador['name']) ? $sobreInvocador['name'] : 'Aguardando invocador' ; ?></h1>
	</div>

	<div class="campo-direita">
		<form class="form-inline" method="GET">
			<div class="form-group">
				<label class="sr-only">Invocador:</label>
				<input type="text" class="form-control" placeholder="Nome de Invocador" name="nome" required>
			</div>
			<select name="region">
			  <option value="br1">BR</option>
			  <option value="eun1">EUNE</option>
			  <option value="euw1">EUW</option>
			  <option value="jp1">JP</option>
			  <option value="kr">KR</option>
			  <option value="la1">LAN</option>
			  <option value="la2">LAS</option>
			  <option value="na1">NA</option>
			  <option value="oc1">OCE</option>
			  <option value="tr1">TR</option>
			  <option value="ru">RU</option>
			  <option value="pbe1">PBE</option>
			</select>
			<button type="submit" class="btn btn-default">Invocar</button>
		</form>
	</div>
</div>
<div class="container">
	<div style="background-color: #dcdcdc; text-align: center;"><h2>Maestria</h2></div>
	<div class="row">
		<div class="container" style="background-color: gray;">
			<?php 
				$mstr = 'https://'.$_GET['region'].'.api.riotgames.com/lol/match/v3/matchlists/by-account/'.$sobreInvocador['accountId'].'?api_key=<API_KEY>';
				
				$mastery = json_decode(file_get_contents($mstr), TRUE);

				foreach ($mastery['matches'] as $value) {
					echo $value['lane']."<br>";
					
				}
			?>
		</div>
	</div>
	
</div>

</body>
</html>