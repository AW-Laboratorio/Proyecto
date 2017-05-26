<?php
	require_once '/../config.php';
	use\estatica\includes\Aplicacion as App;
	$app = App::getSingleton();
	$app->logout();
	header("Location: ../../desconectarse.php");
 ?>