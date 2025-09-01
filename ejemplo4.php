<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calificacion</title>
    <link rel="stylesheet" href="ejemplo4.css">

</head>
<body>
    <div class="container">
<h2>evaluacion de notas</h2>

<form action="" method="post">

<label for="txtnombes">Escribe nombre</label>
<input type="text" name="txtnombres" placeholder="Escribe Nombre" required>

<label for="txtapellidos">Escribe apellido</label>
<input type="text" name="txtapellidos" placeholder="Escribe Apellidos" required>

<label for="txtcalificaciones">Escribe calificaciones</label>
<input type="text" name="txtcaleificaciones" placeholder="Escribe Calificaciones" required>

<input type="submit" name="btncalcular" value="calcular">



</form>

<?php

if(isset($_POST['btncalcular'])){
$nom=$_POST['txtnombres'];
$ape=$_POST['txtapellidos'];
$nota=$_POST['txtcaleificaciones'];
$mensaje="";
if($nota>=18){
    $mensaje="EXCELENTE";
}
elseif($nota>=14){
    $mensaje="BUENO";
}
elseif($nota>=11){
    $mensaje="REGULAR";
}
elseif($nota<11){
    $mensaje="DEFICIENTE";
}

echo "<div class='Resultado'>";


echo "<div class='Mensaje'> Messaje es: $mensaje</div>";

echo "</div>";


}


?>








    </div>
    



</body>
</html>