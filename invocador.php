<?php
//Iniciando uma sessão para salvar o accountID e summonerID(ou apenas ID), para utilização futura
session_start();


//Apenas um tratamento de erro caso não seja possivel receber um valor pelo metodo GET
$string = isset($_GET['nome']) ? $_GET['nome'] : 'brTT';

//Retirando os espaços do nick
$string = str_replace(" ","",$string);
$nome = $string;

//Insira seu API KEY, caso não tenha obtenha facilmente apenas logando com sua conta do lol (ele aceita de qualquer região)
//Facilitando sua vida: https://developer.riotgames.com/ 
$key = "<SUA_API_KEY>";
//Poderia deixar essa key em um arquivo de conexão (ex.: conn.php) por questões de manutenção e segurança

//Check a região correta aqui: https://developer.riotgames.com/regional-endpoints.html
//Você pode fazer um solução em que o úsuario possa escolher a região e utilizando apenas uma variavel para modifica-la
//Estou utilizando o SUMMONER-V3 (GET)
$urlPerfil = "https://br1.api.riotgames.com/lol/summoner/v3/summoners/by-name/$nome?api_key=$key";

//utilizando o file_get_contents() para pegar o conteúdo e utilizando o json_decode para tranforma-lo em array
$conteudoPerfil = file_get_contents($urlPerfil);
$jsonPerfil = json_decode($conteudoPerfil, true);
//Você pode otimiza-lo:
//$jsonPerfil = json_decode(file_get_contents($urlPerfil), true);

//Agora irei utilizar a arrey que acabei de criar ($jsonPerfil)
echo "<h1 class='caixa-sombra'>".$jsonPerfil['name']."</h1>";
echo "<br>";
echo "Nivel: ".$jsonPerfil['summonerLevel'];
//Caso queria saber como saber quais nomes/indices utilizar vá em:
//https://developer.riotgames.com/api-methods/
//Vá na api que esta utilizando e procure uma tabela escrita "<atributo>DTO" (ex.: summmonerDTO, RankedStatsDTO, ChampionStatsDTO e etc) 
//Ela te falara quais os atributos existentes na API utilizada


//Agora irei salvar as informações da array para o SESSION, caso precise usa-las novamente.
$_SESSION = [

	"name" => $jsonPerfil['name'],
	"summonerLevel" => $jsonPerfil['summonerLevel'],
	"revisionDate" => $jsonPerfil['revisionDate'],
	"id" => $jsonPerfil['id'],
	"accountId" => $jsonPerfil['accountId'],
	"profileIconId" => $jsonPerfil['profileIconId'],
	"key" => $key,
	
];

?>
<div class="principal">
<link rel="stylesheet" type="text/css" href="invoker.css">
<table style="width:100%">

	  <tr>
	    <th><a href="talentos.php?">Talentos</a></th>
	    <th><a href="runas.php?key=<?php $_SESSION['key']; ?>&id=<?php $_SESSION['id']; ?>">Runas</a></th> 
	    <th><a href="historico.php">Historico</a></th>
	    <th></th>
	  </tr>

</table>

</div>