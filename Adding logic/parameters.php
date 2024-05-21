<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      function getStatus($paymentStatus, $showMessage = true){
         $message = match ($paymentStatus){
            1 => 'Success',
            2 =>  'Denied',
            default => 'Unknown'
         };
        
         if($showMessage){
            var_dump($message);
         }
         var_dump($message);
      }

      getStatus(1);

    ?>
</body>
</html> 