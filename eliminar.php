<?php

$id=$_GET["id"];
$conexion = new PDO("mysql:host=localhost;port=3306;dbname=escuela", "root", "");

$sql="DELETE FROM alumnos WHERE id='".$id."'";
$resultado=$conexion-> query($sql);

if($resultado){
    echo "<script languaje='JavaScript'>
          alert('Los datos de esta persona han sido eliminados');
          location.assign('elim.php') </script>;"
          ;
}else{
    echo "<script languaje='JavaScript'>
          alert('No se pudo eliminar');
          location.assign('elim.php') </script>;";
}

?>