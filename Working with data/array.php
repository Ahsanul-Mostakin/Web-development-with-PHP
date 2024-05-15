<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $data = ['Salad','Burger', 'pizza'];

    $data[1]='Chicken';
    $data[]= 'Tomato Soup';

    var_dump($data);
    ?>
</body>
</html>