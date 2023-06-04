<?php
  $conexion = new PDO("mysql:host=localhost;port=3306;dbname=escuela", "root", "");
   
  session_start();
   
  if($_SERVER["REQUEST_METHOD"] == "POST") {
     // username and password sent from form 
     
     $myusername = isset($_POST['usuariox']) ? $_POST['usuariox'] : '';
     $mypassword = isset($_POST['contrasenax']) ? $_POST['contrasenax'] : '';
     
     $sql = "SELECT * FROM maestros WHERE usuario = '$myusername' and contrasena = '$mypassword'";
     $result= $conexion-> query($sql);
     $row = $result-> fetch(PDO::FETCH_ASSOC);

 
     if($result->rowCount() > 0){
        echo "<script languaje='JavaScript'>
        alert('Acceso correcto');
        location.assign('Index.html') </script>;"
        ;
     }
      else {
           
        echo "<script languaje='JavaScript'>
        alert('Acceso incorrecto, usuario o sontraseña incorrectos...');
        location.assign('login.html') </script>;"
        ;
      }
    }
?>