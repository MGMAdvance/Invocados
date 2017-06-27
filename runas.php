<?php require 'auth.php'; ?>
<link rel="stylesheet" type="text/css" href="invoker-modify.css">
<h1 class="caixa-sombra"><?php echo  $_SESSION['name']; ?></h1>
<?php

$id = $_SESSION['id'];
$key = $_SESSION['key'];

//RUNES-V3
//https://developer.riotgames.com/api-methods/#runes-v3

$API = "https://br1.api.riotgames.com/lol/platform/v3/runes/by-summoner/".$id."?api_key=".$key;
$runaAPI = json_decode(file_get_contents($API), true);

foreach ($runaAPI as $pagina) {
	echo $pagina;
}

//Em desenvolvimento

?>