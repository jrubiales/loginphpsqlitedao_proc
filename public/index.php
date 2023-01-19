<?php

require_once(__DIR__ . '/../src/userbo.php');

if (isset($_POST['btnSumbit'])) {
    // Al ser un ejemplo básico, no se usará ningún sistema limpieza de datos de entrada.
    // Podría ser útil el uso de filter_input,
    // Más info en: https://www.php.net/manual/es/function.filter-input.php.
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $valStatus = -1;
    $loginRes = login($username, $password, $valStatus);
    if ($loginRes) {
        echo "<p>Login correcto</p>";
    } else {
        $msg = 'Error al iniciar sesión.';
        switch($valStatus) {
            case LoginValErrStatus::ERR_USERNAME: $msg .= ' El usuario no es correcto.'; break;
            case LoginValErrStatus::ERR_PASSWORD: $msg .= ' La clave no es correcta.';   break;
        }
        echo "<p>$msg</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PHP SQLite DAO (Procedural)</title>
</head>
<body>
    <form action="/" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="btnSumbit" value="login">
    </form>
</body>
</html>