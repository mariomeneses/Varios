function validar() {
	var name_err = email_err = pass_err = age_err =  edad_err = '';
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

    var day = document.getElementById("day").value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;

    if (day!=='' || month !=='' || year !=='' ) {
        var today = new Date();
        var birthDate = new Date(year, month, day);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (age > 18) {
          //alert('mayor');
        }else{
          age_err = 'menor de edad';
        }
    }else{
        edad_err = 'ingrese edad';
    }

   	if (name_err !== '' || email_err !== '' || pass_err !== '' || age_err !=='' || edad_err !=='') {
   		$(".error_class").empty().html(name_err + email_err + pass_err + age_err + edad_err).fadeIn(2000, function(){
        $(this).fadeOut();
      });
   		return false;
   	}

   	//Si pasa las validaciones, enviar form modo async
   	$.ajax({
      url: "post.php",
      type: "POST",
      data: $("#data").serialize(),
      beforeSend: function() {
        $("#result1").empty().html('<h1>Procesando...</h1>');
      },
      success: function(results) {
        $("#result1").delay(1000).empty().html('<h1>' + results + '</h1>');
      }
    });
    return false;
}