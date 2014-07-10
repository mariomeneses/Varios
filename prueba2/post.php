<?php 
	$name1 = $_POST['name1'];
	$email1 = $_POST['email1'];
	$pass1 = $_POST['pass1'];

	function val_name($name1){
		if(preg_match("/^[A-Z a-z]{3}+$/", $name1)){
			return false;
		}else{
			return true;
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
		if (preg_match("/^[A-Z a-z 0-9]{3}+$/", $pass1)) {
			return false;
		}else{
			return true;
		}

	}

	$error = '';
	if (!val_name($name1)) $error .= 'Error nombre';
	if (!val_email($email1)) $error .= ' Error email ';
	if (!val_pass1($pass1)) $error .= ' Error pass ';
	
	if (!empty($error)) {
		echo $error;
	}
?>