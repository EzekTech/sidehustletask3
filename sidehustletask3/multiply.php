<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <?php
    function multiply($num1,$num2,$num3 = 5){
        $product = $num1 * $num2 * $num3;
        echo "$product";
       }
       multiply(6,4);
  ?>
    <p></p>
    <?php
    
      include "newfile.php"
    ?>


</body>
</html>