<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    
    <div>
        <form action="calculadora-imc.php" method="POST">
            <label>Estatura (Mts)</label>
            <input type="text" name="estatura" required>

            <label>Peso (KG):</label>
            <input type="number" name="peso" required>

            <button type="submit">Calcular</button>
        </form>
    </div>

</body>
</html>