<?php 
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	$nac = new DateTime($year.'-'.$month.'-'.$day);
	$act = new DateTime(date('Y-m-d'));
	$final = $nac->diff($act);
	$edad = $final->y;

	echo "edad".$edad;


 ?>