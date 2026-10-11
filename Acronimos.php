<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>generador de Acronimos</title>
</head>
<body>
    <a class="volver"href="index.php">volver al menu principal</a>
    <form method="POST"action="Acronimos.php">
        <div></div>
        <label for="frase">infrese la frase o texto largo</label><br>
        <input type="text" id="frase" name="frase" value="<?php echo htmlspecialchars($frase_usuario); ?>">
        <button type="submit">generar Acronimo</button>
    </form>
</body>
</html>