<?php
session_start();
$key = "<sua API KEY>";

$_SESSION['key'] = $key;

?>

<?php
	if ($_SESSION['key'] === $key):
?>
		<center><h1 style="color: green;">Esta funcionando</h1></center>
<?php else: ?>
		<center><h1 style="color: red;">Não esta Funcionando</h1></center>
<?php endif ?>
