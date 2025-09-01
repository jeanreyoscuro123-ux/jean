<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
    <div>
        <h2>calculo de pension</h2>
        <form  method=""action="post" >

        <label for="nombre">nombre del estudiante:</label>
        <input type="text" id="nombre"  name="nombre" required>

        <label for="pension">pencion (s/):</label>
        <input type="number" id="pension" name="pension" step="0.01"required>

        <label for="turno">turno</label>
        <select name="turno" id="turno">
            <option value="mañana">mañana</option>
            <option value="tarde">tarde</option>
            <option value="noche">noche</option>
        </select>
        <label for="turno">turno</label>
        <select name="turno" id="turno">
            <option value="mañana">mañana</option>
            <option value="tarde">tarde</option>
            <option value="noche">noche</option>
        </select>

        <button type="submit" class="btn">calcular</button>
        </form>
    </div>
</body>
</html>