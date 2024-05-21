<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $paymemtStatus = 2;

    switch($paymemtStatus){
        case 1:
            var_dump('Success');
            break;

        case 2:
            var_dump('Pending');
            break;
            
         default :
         var_dump('Unknow');
         break;   
    }
    ?>
</body>
</html>