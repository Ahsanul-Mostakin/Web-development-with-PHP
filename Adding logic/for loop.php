<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     for($i = 1 ; $i<=15 ; $i++){
        if($i === 6){
            break;
        }
        echo $i . "<br>";
     }

    ?>
</body>
</html>