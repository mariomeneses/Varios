<?php 
	$name1 = $_POST['name1'];
	$email1 = $_POST['email1'];
	$pass1 = $_POST['pass1'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$fecha = $year.'-'.$month.'-'.$day;
	//var_dump($_POST);

	/*function val_campos(){
		if(!empty($name1 && $email1 && $pass1 && $day && $month && $year){
			return true;
		}else{
			return false;
		}
	}
*/
	function val_name($name1){
		if(preg_match("/^[A-Z a-z]{3,}+$/", $name1)){
			return true;
		}else{
			return false;
		}
	}

	function val_email($email1){
		if (preg_match("/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/", $email1)) {
			return true;
		}else{
			return false;
		}
	}

	function val_pass1($pass1){
		if (preg_match("/^[A-Z a-z 0-9]{3,}+$/", $pass1)) {
			return true;
		}else{
			return false;
		}

	}

	function val_age($nac){ //var_dump($nac); die();
		$nac = new DateTime($nac);
		$act = new DateTime(date('Y-m-d'));
		$final = $nac->diff($act);
		$edad = $final->y;
			if ($edad>18) { //corregir
				return true;
			}else{
				return false;
			}
	}

	$error = '';
	if (!val_name($name1)) $error .= 'Error nombre';
	if (!val_email($email1)) $error .= ' Error email ';
	if (!val_pass1($pass1)) $error .= ' Error pass ';
	if (!val_age($fecha)) $error .= ' Menor de edad';

	
	
	if (!empty($error)) {
		echo $error;
	} else {
		echo "Formulario guardado!";
	}
	//FALTA VALIDAR Q NO ENTRE VACIA LA FECHA
?>

