<?php 

	$useradmin = $_POST['useradmin'];
	$passadmin = $_POST['passadmin'];

	function val_useradmin($useradmin){
		if(preg_match("/^[A-Z a-z]{3,}+$/", $useradmin)){
			return true;
		}else{
			return false;
		}
	}

	function val_passadmin($passadmin){
		if (preg_match("/^[A-Z a-z 0-9]{3,}+$/", $passadmin)) {
			return true;
		}else{
			return false;
		}
	}
	$error = '';
	if (!val_useradmin($useradmin)) $error .= 'Error usuario';
	if (!val_passadmin($passadmin)) $error .= ' Error contraseña';

	if (!empty($error)) {
		$response = array('error' => $error);
	} else {
		// Aca valida BD
		$response = array('error' => '', 'url' => 'index.php');
	}

	echo json_encode($response);
 ?>