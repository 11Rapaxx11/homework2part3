
<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>

   <form method='POST'>
   <h2>здарова напиши тут своё имечко и возраст</h2>
 <input type="text" name="name">
 <br>
 <input type="text" name="age">
 <br>
 <input type="submit" value="имя и возраст">
 </form>


<?php
$name = $_POST['name'];
$age = $_POST['age'];
echo "<h2>Привет $name и тебе $age! </h2>";
?>
</body>
</html>