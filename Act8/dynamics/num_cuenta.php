<?php

    /*session_start();
    if($_SESSION["ncuenta"])
    {
        header('location: ./data_alum.php');
    }*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultoría Kiki</title>
</head>
<body>
    <form action="./data_alum.php" method="POST">
        <fieldset>
            <br>
            <strong>Execute Pase Reglamentado</strong>
            <br><br>
            <label>Número de cuenta: <br>
                <input type="number" name="ncuenta" placeholder="Número de cuenta">
            </label>
            <br><br>
            <input type="submit" value="Ingresar">
        </fieldset>
    </form>
</body>
</html>