<?php

session_start();

if ($_SESSION['name'] == null) {
	
	header('location: index.php');

} else{

}
?>