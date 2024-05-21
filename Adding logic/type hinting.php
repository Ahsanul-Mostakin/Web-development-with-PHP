<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      function getStatus(mixed $paymentStatus, bool $showMessage = true) : string {
         $message = match ($paymentStatus){
            1 => 'Success',
            2 =>  'Denied',
            default => 'Unknown'
         };
        
         if($showMessage){
            var_dump($message);
            return null;
         }
         return  $message;
      }

      $statusMessage =getStatus(1);
      var_dump($statusMessage);

    ?>
</body>
</html> 