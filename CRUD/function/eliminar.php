<?php

    require_once '../class/class.php';
    $main = new mainSys;
    $main->conectar();
	$main->eliminar($_GET['id']);
	header('Location: ../index.php');

 ?>