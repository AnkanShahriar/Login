<?php

session_start();
?>
<!DOCTYPE html>
<html>
<body>

h2>My Form </h2>
<p><span class="error">*Please fill up the form</span></p>
<form method="post" action="page.php">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="email" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>
  
  </body>
</html>