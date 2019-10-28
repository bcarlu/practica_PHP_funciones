<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Taller 3 uso de funciones</title>
</head>
<body>
  <h3>Operaciones matematicas</h3>
  <?php
  /*Datos del desarrollador:
    * Nombre: Brian Cardona Lujan
    * Nombre del curso: Desarrollo web con PHP
    * Evidencia: Taller 3 uso de funciones         
  */
  
  //Se incluye biblioteca alojada en otro archivo
  include_once'./biblioteca.php';

  /*Se llama a la funcion con el tercer parametro vacio para recibir el valor por defecto 
  *para la suma y se incluyen los demas parametros para las otras operaciones
  */
  operaciones(7,5);
  operaciones(7,5,"resta");
  operaciones(7,5,"multiplicacion");
  operaciones(7,5,"division");
  ?>

</body>
</html>