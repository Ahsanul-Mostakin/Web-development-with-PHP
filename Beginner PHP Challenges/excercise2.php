<?php
declare(strict_types=1);

function twoFer(string $name = "you"): string {
    return "One for $name, one for me.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo twoFer("Alice"); 
    echo twoFer();        
    ?>
</body>
</html>
