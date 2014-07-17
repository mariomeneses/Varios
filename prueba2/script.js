function validar() {
	//var name_err = email_err = pass_err = age_err =  edad_err = '';
  var name1 = document.getElementById("name1").value;
  var email1 = document.getElementById("email1").value;
  var pass1 = document.getElementById("pass1").value;
  var day = document.getElementById("day").value;
  var month = document.getElementById("month").value;
  var year = document.getElementById("year").value;

    if (name1 == '' && email1 == '' && pass1 == '' && day =='' && month =='' && year =='' ) {
      $('.error_class').empty().html('Campos vacios').fadeIn(2000, function() {
        $(this).fadeOut();
      });
      return false;
    };


	var namexp = /[A-Z a-z]{3}/;
		if (namexp.test(name1)) {
			//alert('bien nombre');
		}else{
			//name_err = 'mal nombre';
      //if (name_err == '' ) {
      $('.error_class').empty().html('Error Nombre').fadeIn(2000, function() {
        $(this).fadeOut();
      });
      return false;
    //};
   		}

	var emailexp = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		if (emailexp.test(email1)) {
			//alert('bien mail');
		}else{
      $('.error_class').empty().html('Error Mail').fadeIn(2000, function() {
        $(this).fadeOut();
      });
      return false;
   		}

	var passexp = /[A-Z a-z 0-9]{3}/;
		if (passexp.test(pass1)){
			//alert('bien pass');
		}else{
      $('.error_class').empty().html('Error Contraseña').fadeIn(2000, function() {
        $(this).fadeOut();
      });
      return false;
   		}

    if (day!=='' && month !=='' && year !=='' ) {
        var today = new Date();
        var birthDate = new Date(year, month, day);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (age > 18) {
          //alert('mayor');
        }else{
      $('.error_class').empty().html('Debes ser mayor de edad').fadeIn(2000, function() {
        $(this).fadeOut();
      });
      return false;        }
    }else{
      $('.error_class').empty().html('Error edad').fadeIn(2000, function() {
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
        $('#data').trigger("reset");      }
    });
    return false;
}

function validarLogin(){
  var useradmin = document.getElementById("useradmin").value;
  var passadmin = document.getElementById("passadmin").value;
    
    if (useradmin == '' && passadmin == '' ) {
      $('.error_class2').empty().html('Campos vacios').fadeIn(2000, function() {
        $(this).fadeOut();
      });
      return false;
    };

    var useradminexp = /[A-Z a-z]{3}/;
      if (useradminexp.test(useradmin)) {

      }else{
        $('.error_class2').empty().html('Error usuario').fadeIn(2000, function() {
          $(this).fadeOut();
      });
        return false;
      }

    var passadminexp = /[A-Z a-z 0-9]{3}/;
      if (passadminexp.test(passadmin)){

      }else{
        $('.error_class2').empty().html('Error Contraseña').fadeIn(2000, function() {
          $(this).fadeOut();
      });
        return false;
      }

    $.ajax({
      url: "login.php",
      type: "POST",
      data: $("#login").serialize(),
      dataType: 'json',
      beforeSend: function() {
        $("#result2").empty().html('<h1>Procesando...</h1>');
      },
      success: function(results) {
        if (results.error === '') {
          location.href = results.url;
        } else{
          $("#result1").delay(1000).empty().html('<h1>' + results.error + '</h1>');
          $('#data').trigger("reset");
        }
      }
    });
    return false;
}