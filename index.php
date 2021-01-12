<?php
require_once('function.php');
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
  define("monsterCount", 6);
  for ($i=0; $i < monsterCount ; $i++) { 
   drawMonster(rand(1,6), rand(100,500));
}  
 ?>
</body>
</html>

