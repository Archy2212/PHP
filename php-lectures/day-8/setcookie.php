<?php
   setcookie("name", "Testing time", time()+10, "/","", 0);
   setcookie("age", "31", time()+10, "/", "",  0);
?>
<!-- cookies has been set for 10 seconds -->
<html>
   
   <head>
      <title>Setting Cookies with PHP</title>
   </head>
   
   <body>
      <?php echo "Set Cookies"?>
   </body>
   
</html>