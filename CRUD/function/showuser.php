<?php

    require_once '../class/class.php';
    $main = new mainSys;
    $main->conectar();

	$usuarios = $main->mostrar();

 ?>

 <table border="1" width="60%" cellspacing="0">
 	<tr><td>nombre</td><td>mail</td><td>pass</td><td>fecha</td></tr>
<?php  
foreach ($usuarios as $fila){
    echo "<tr>";
    	foreach ($fila as $celda){
            echo "<td> $celda  </td>";
    	}
    	echo '<td><a href="function/eliminar.php?id='.trim($fila['nombre']).'" >Eliminar</a></td>';
    echo '</tr>';
}
?>
</table>