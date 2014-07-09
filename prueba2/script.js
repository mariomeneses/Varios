function validar() {
	var name_err = email_err = pass_err = '';
	var name1 = document.getElementById("name1").value;
	var namexp = /[A-Z a-z]{3}/;
		if (namexp.test(name1)) {
			//alert('bien nombre');
		}else{
			name_err = 'mal nombre';
   		}

	var email1 = document.getElementById("email1").value;
	var emailexp = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		if (emailexp.test(email1)) {
			//alert('bien mail');
		}else{
			email_err = 'mal mail';
   		}


	var pass1 = document.getElementById("pass1").value;
	var passexp = /[A-Z a-z 0-9]{3}/;
		if (passexp.test(pass1)){
			//alert('bien pass');
		}else{
			pass_err = 'mal pass';
   		}

   	if (name_err !== '' || email_err !== '' || pass_err !== '') {
   		alert(name_err + email_err + pass_err);
   		return false;
   	}
}