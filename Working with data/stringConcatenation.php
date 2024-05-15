<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fullName = 'Ahsaul Mostakin';
    $fullName = 100;
    const FULL_NAME = 'Ahsanul Mostakin';

    $message = "Hello, name is ";
    $message .= FULL_NAME;

    var_dump("Hello, my name is ". FULL_NAME);
    echo "<br/>";
    var_dump($message);
    ?>
</body>
</html>