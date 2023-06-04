<?php

$nombre = isset($_POST['nombres']) ? $_POST['nombres'] : '';
$apellidopaterno = isset($_POST['apellidopaterno']) ? $_POST['apellidopaterno'] : '';
$apellidomaterno = isset($_POST['apellidomaterno']) ? $_POST['apellidomaterno'] : '';
$grupo = isset($_POST['grupoa']) ? $_POST['grupoa'] : '';
$materia = isset($_POST['materiaa']) ? $_POST['materiaa'] : '';
$calificacion = isset($_POST['calificaciona']) ? $_POST['calificaciona'] : '';

try {

    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=escuela", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO alumnos(nombre, apellidopat, apellidomat, grupo, materia, calificacion) VALUES(?, ?, ?, ?, ?, ?)');
    $pdo->bindParam(1, $nombre);
    $pdo->bindParam(2, $apellidopaterno);
    $pdo->bindParam(3, $apellidomaterno);
    $pdo->bindParam(4, $grupo);
    $pdo->bindParam(5, $materia);
    $pdo->bindParam(6, $calificacion);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo "<script languaje='JavaScript'>
    alert('La persona ha sido registrada...');
    location.assign('Alumno.html') </script>;"
    ;

} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>