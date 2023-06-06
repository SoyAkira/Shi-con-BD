<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'usa';
//create connection and select DB
$con=mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
$query = "SELECT `correo`, `nombre`, `apellidos`, `contrasena`
FROM `usa` "; 
$res = mysqli_query($con,$query);

?>
<table>
    <tr> <th>Correo</th> <th>Nombre</th> <th>Apellidos</th> <th>Contrasena</th> </tr>
    <?php
    while($row = mysqli_fetch_assoc($res)){
?>
<tr>
    <td> <?php echo $row['correo']; ?></td> 
    <td><?php echo $row['nombre']; ?></td> 
    <td><?php echo $row['apellidos']; ?></td> 
    <td><?php echo $row['contrasena']; ?></td> 
    </tr>
    <?php
   }