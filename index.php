<!doctype html>
<html lang="es">

	<head><title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
		<body>
			<div>agua</div>
			<div>agua</div>
			<form action="prueba.php" method="post">
				<label for="day">day</label>
					<select name="day" id="day"><option value="0">Día&nbsp;</option> <?php  for($i=1;$i<=31;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?></select>
				<label for="month">month</label>
					<select name="month" id="month"><option value="0">Mes&nbsp;</option> <?php  for($i=1;$i<=12;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?></select>
				<label for="year">year</label>
					<select name="year" id="year"><option value="0">Año&nbsp;</option> <?php  for($i=1900;$i<=date ("Y");$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?></select>
				<label for=""><button name="submit" id="submit">Submit</button></label>
			</form>
		</body>
</html>

