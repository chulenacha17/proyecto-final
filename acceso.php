<!DOCTYPE html>
<html lang="es"> 
    <head>
        <meta charset="UTF-8">
        <title>CONVERTIR</title>
        
    <body>

       <?php
       /*Explica, con el código correspondiente, cómo generar una 
       conexión desde PHP para una base de datos MySQL llamada
        clubdenatación y cómo realizar una consulta que
        contenga todos los campos de la tabla nadadores.*/


     //lo primero que devemos hacer es crear un archivo llamado conecxion.php
     $conexion = mysqli_connect("localhost","usuarios","","");
     
     //luego elegimos la bace de datos que vamos a utilizar

     $db = mysqli_select_db($conexion, "clubdenatación");

     //para realisar la consulta debemos :

     $resultado = mysqli_query($conexion," SELECT * FROM nadadores");
       
     //al terminar y para garantizar que no quede ninguna conexion abierta, se dev llamar con :
      
     mysqli_close($conexion);
  ?>

     </body>
</html> 