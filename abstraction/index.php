<?php
require_once __DIR__ . "/Form.php";
require_once __DIR__ . "/TextInput.php";
require_once __DIR__ . "/PasswordInput.php";
require_once __DIR__ . "/ButtonElem.php";

$objForm = new Form("#");
$objForm->addElement(new TextInput("nombre", "", "Nombre"));
$objForm->addElement(new PasswordInput("passwd", "", "Contraseña"));
$objForm->addElement(new ButtonElem("Entrar"));
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?= $objForm->render() ?>
</body>
</html>
