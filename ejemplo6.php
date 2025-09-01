<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel</title>
    <link rel="stylesheet" href="estilo6.css">
</head>
<body>

   <div class="container">
    <h2>Realizar pago segun el nivel estudio</h2>
    <form action="" method="post">

    <label for="txtnom">Nombre</label>
    <input type="text" name="txtnom" placeholder="Escribir nombre">

    <select name="cboNivel"reired>
        <option value="domingo">DOMINGO</option>
        <option value="sabado">SABADO</option>
        <option value="viernes">VIERNES</option>
        <option value="jueves">JUEVES</option>
        <option value="miercoles">MIERCOLES</option>
        <option value="martes">MARTES</option>
        <option value="lunes">LUNES</option>
    </select>
    <input type="submit" name="btcalcular" value="calcular">
    </form>

    <?php

if(isset($_POST['btcalcular'])){

$nom=$_POST['txtnom'];
$nivel=$_POST['cboNivel'];
$costo=0;
if($nivel=="domingo"){
    $costo=80;
}
elseif($nivel=="sabado"){
    $costo=100;
}
elseif($nivel=="viernes"){
    $costo=120;
}
elseif($nivel=="jueves"){
    $costo=150;
}
elseif($nivel=="miercoles"){
    $costo=200;
}
elseif($nivel=="martes"){
    $costo=250;
}
elseif($nivel=="lunes"){
    $costo=300;
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