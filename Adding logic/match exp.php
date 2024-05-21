<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $paymentStatus = 2 ;
     $message = match($paymentStatus){
        1 => 'Success',
        1 => 'Denied',

        default => 'unknown'
     };

     var_dump($message);

    ?>
</body>
</html>