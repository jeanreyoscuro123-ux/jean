<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel</title>
    <link rel="stylesheet" href="estilo5.css">
</head>
<body>

   <div class="container">
    <h2>Realizar pago segun el nivel estudio</h2>
    <form action="" method="post">

    <label for="txtnom">Nombre</label>
    <input type="text" name="txtnom" placeholder="Escribir nombre">

    <select name="cboNivel"reired>
        <option value="primaria">primaria</option>
        <option value="secundaria">secundaria</option>
        <option value="tecnico">tecnico superior</option>
        <option value="superior">superior</option>
    </select>
    <input type="submit" name="btcalcular" value="calcular">
    </form>

    <?php

if(isset($_POST['btcalcular'])){

$nom=$_POST['txtnom'];
$nivel=$_POST['cboNivel'];
$costo=0;
if($nivel=="primaria"){
    $costo=80;
}
elseif($nivel=="secundaria"){
    $costo=100;
}
elseif($nivel=="tecnico"){
    $costo=120;
}
elseif($nivel=="superior"){
    $costo=150;
}
 echo "<div class'Resultado'>";
 echo "<div class='Nombre'>Nombre es:$nom </div>";
 echo "<div class='Costo'>Costo es:$costo </div>";

 echo "</div>";

}
?>
    


    
   </div> 
</body>
</html>