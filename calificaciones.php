
<!DOCTYPE html>
<html>
<head>
	<title>Calificaciones</title>


</head>
<body bgcolor="#E6E6FA">

    <center><h1>Calificaciones</h1></center><br>

<br>

	<table border="1" align="center">
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>Apellido Paterno</td>
			<td>Apellido Materno</td>
			<td>Grupo</td>
            <td>Materia</td>
            <td>Calificacion</td>	
		</tr>
		<?php

		$conexion = new PDO("mysql:host=localhost;port=3306;dbname=escuela", "root", "");

        $sql="SELECT * FROM alumnos";
		$result= $conexion-> query($sql);

        if($result->rowCount() > 0){
		while($row = $result-> fetch(PDO::FETCH_ASSOC)){
			echo "<tr><td>". $row["id"] ."</td><td>". $row["nombre"] .
			"</td><td>". $row["apellidopat"] ."</td><td>". $row["apellidomat"] ."</td><td>". $row["grupo"]
			."</td><td>". $row["materia"] ."</td><td>". $row["calificacion"] ."</td></tr>";
		}echo"</table>";
	}else{
		echo "No result";
	}
	$conexion=null;
		?>
	
	    
	</table>

    <p><center><a href="Index.html">Regresar al inicio</a></center></p>

	<center><p><a href="Alumno.html">Ir al registro</a></p></center>
    <p><center><a href="elim.php"><button>Eliminar</button></a></center></p>

</body>
</html>

