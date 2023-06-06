<?php


$Correo = $_GET['correo'];
$Nom = $_GET['nombre'];
$Ap = $_GET['apellidos'];
$Contra = $_GET['contrasena'];

  //datos conexion
  $dbHost = 'localhost';
  $dbusername = 'root';
  $dbPassword = '';
  $dbName = 'usa';

  $db= new mysqli ('localhost', 'root' ,  '' , 'usa');
  $db -> set_charset('utf8');

  // check connection
  if($db->connect_error){
    die("connection failed:".$db->connec_error);
  }else{
    echo "<h1>Conectado</h1>";
  }
 
//Insert content into database
$insert = $db->query("INSERT into usa (correo,nombre,apellidos,contrasena)
VALUES ('$Correo','$Nom','$Ap','$Contra')");

if($insert){
     echo "Usuario Agregado";
}else{
   echo "Error";
}