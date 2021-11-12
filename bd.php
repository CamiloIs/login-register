<?php
$host = "127.0.0.1"; //La ip de nuestra maquina principal 
$usuario = "root"; //usuario que configuramos MySQL Workbench
$clave="1997";//contraseña que configuramos MySQL Workbench
$bd="process"; //Nombre de Base de datos


$conexion = mysqli_connect($host,$usuario,$clave,$bd); //msqlserver 



if (!$conexion) {
 die("Conexion fallo: " . mysqli_connect_error());  //Devuelve una cadena con la descripción del último error de conexión
}else{
   echo "Conexion con exito";
}



?>